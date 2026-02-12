@extends('front.layout')

@section('staticTranslation')
    <main class="px-4 pb-10 md:px-16 lg:px-24">
        <div class="mx-auto mt-14 max-w-7xl rounded-3xl border border-slate-200/80 bg-slate-50/95 p-6 text-slate-900 shadow-xl md:mt-16 md:p-10 lg:p-12">
            <section class="mx-auto max-w-6xl text-center">
                <h1 class="mx-auto mt-6 max-w-3xl text-4xl/12 font-semibold tracking-tight md:text-6xl/18">Static Translations</h1>
            </section>

            @if(session('error'))
                <div class="mx-auto mt-8 max-w-6xl rounded-xl border border-rose-300 bg-rose-50 px-4 py-3 text-sm text-rose-700" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            {{-- Add Translation Form --}}
            <div class="mx-auto mt-10 max-w-6xl space-y-6">
                <section class="rounded-2xl border border-slate-200 bg-white p-5">
                    <form action="{{ route('admin.storeStaticTranslations') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="mb-4 flex items-center justify-between gap-3">
                            <h2 class="text-lg font-semibold">Add Static Translations</h2>
                        </div>

                        <label class="mx-auto flex max-w-md items-center gap-2">
                            <span class="shrink-0 rounded-l-lg border border-slate-200 bg-slate-100 px-3 py-2 text-sm text-slate-600">key</span>
                            <input type="text" name="key" class="w-full rounded-r-lg border border-l-0 border-slate-200 bg-white px-3 py-2 outline-none focus:border-cyan-500">
                        </label>

                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            @foreach($locales as $index => $locale)
                                <label class="space-y-2 md:col-span-2">
                                    <span class="shrink-0 rounded-lg border border-slate-200 bg-slate-100 px-3 py-1 text-sm text-slate-600">{{ $locale['abbr'] }}</span>
                                    <textarea @required($main === $locale['abbr']) name="{{ $locale['abbr'] }}" id="translation{{ $index }}" cols="30" rows="5" class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 outline-none focus:border-cyan-500"></textarea>
                                </label>
                            @endforeach
                        </div>

                        <div class="flex justify-center pt-2">
                            <button type="submit" class="rounded-full bg-slate-900 px-5 py-2 text-sm font-medium text-white transition hover:bg-slate-700">Add Translation</button>
                        </div>
                    </form>
                </section>

                {{-- Auto-Translate Form --}}
                <section class="rounded-2xl border border-slate-200 bg-white p-5">
                    <form action="{{ route('admin.autotranslate') }}" method="post" class="flex flex-wrap items-end justify-center gap-4">
                        @csrf
                        <label class="space-y-1">
                            <span class="text-sm text-slate-700">From File</span>
                            <select id="from_file" name="from_file" class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 outline-none focus:border-cyan-500">
                                <option value="">Select</option>
                                @foreach($locales as $key => $locale)
                                    <option value="{{ $locale['abbr'] }}">{{ $locale['abbr'] }}</option>
                                @endforeach
                            </select>
                        </label>

                        <label class="space-y-1">
                            <span class="text-sm text-slate-700">Translation</span>
                            <select id="to_file" name="to_file" class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 outline-none focus:border-cyan-500">
                                <option value="">Select</option>
                                @foreach($locales as $key => $locale)
                                    <option value="{{ $locale['abbr'] }}">{{ $locale['abbr'] }}</option>
                                @endforeach
                            </select>
                        </label>

                        <button type="submit" class="rounded-full bg-slate-900 px-5 py-2 text-sm font-medium text-white transition hover:bg-slate-700">Translate</button>
                    </form>
                </section>

                {{-- Translations Table --}}
                <section>
                    <div class="mb-4">
                        <h2 class="text-lg font-semibold">Static Translations</h2>
                    </div>

                    <div class="overflow-x-auto rounded-2xl border border-slate-200 bg-white">
                        <form id="updateForm" action="{{ route('admin.updateStaticTranslation') }}" method="post">
                            @csrf
                            <table class="min-w-full text-center text-sm" id="static-lang" style="width:100%">
                                <thead class="bg-slate-100 text-slate-700">
                                    <tr>
                                        <th class="px-4 py-3" style="width: 300px">Key</th>
                                        @foreach($locales as $index => $locale)
                                            <th class="px-4 py-3">{{ $locale['abbr'] }}</th>
                                        @endforeach
                                        <th class="px-4 py-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $counter = -1;
                                    @endphp
                                    @foreach($keys as $index => $key)
                                        @php
                                            $counter++;
                                        @endphp
                                        <tr class="border-t border-slate-200">
                                            <td class="max-w-[300px] px-4 py-3">
                                                <p class="max-w-[300px] truncate">{{ $key }}</p>
                                            </td>
                                            @foreach($jsonData as $abbr => $language)
                                                <td class="px-4 py-3">
                                                    <input data-form-abbr="{{ $index }}" name="abbr[]" type="hidden" value="{{ $abbr }}" disabled>
                                                    <input data-form-key="{{ $index }}" name="key[]" type="hidden" value="{{ $key }}" disabled>
                                                    <textarea disabled class="translation w-full rounded-lg border border-slate-200 bg-white px-3 py-2 outline-none focus:border-cyan-500" data-translation="{{ $index }}" name="translation[]">@if(isset($language[$key])){{ $language[$key] }}@endif</textarea>
                                                </td>
                                            @endforeach
                                            <td class="px-4 py-3">
                                                <div class="flex items-center justify-center gap-2">
                                                    <button type="button" data-edit="{{ $index }}" class="edit-translation cursor-pointer text-blue-600 transition hover:text-blue-800" title="Edit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                                                    </button>
                                                    <button type="button" data-submit="{{ $index }}" class="hidden cursor-pointer text-emerald-600 transition hover:text-emerald-800" title="Save">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                                                    </button>
                                                    <button type="button" data-cancel-submit="{{ $index }}" class="hidden cursor-pointer text-rose-600 transition hover:text-rose-800" title="Cancel">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                    </button>
                                                    <button type="button" data-delete="{{ $index }}" class="hidden cursor-pointer text-rose-600 transition hover:text-rose-800" title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/></svg>
                                                    </button>
                                                    <input style="display:none" data-deleteinput="{{ $index }}" name="delete" value="delete" type="text" class="translation" placeholder="Disabled input" disabled="">
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>

    {{-- edit static translation --}}
    <script>

        const updateForm2 = document.getElementById('updateForm')

        if (updateForm2) {

            updateForm2.addEventListener('mouseover', (e) => {
                editTranslationButtons = document.querySelectorAll(`[data-edit]`)
                // console.log(editTranslationButtons)
                editTranslationButtons.forEach((el, index) => {

                    el.addEventListener('click', e => {

                        document.querySelectorAll('[data-form-abbr="' + el.getAttribute('data-edit') + '"]').forEach(element => {
                            element.removeAttribute('disabled');
                        });
                        document.querySelectorAll('[data-form-key="' + el.getAttribute('data-edit') + '"]').forEach(element => {
                            element.removeAttribute('disabled');
                        });

                        document.querySelectorAll('[data-key="' + el.getAttribute('data-edit') + '"]').forEach(element => {
                            element.removeAttribute('disabled');
                        });

                        document.querySelectorAll('[data-translation="' + el.getAttribute('data-edit') + '"]').forEach(element => {
                            element.removeAttribute('disabled');
                            element.setAttribute('rows', 10);
                        });

                        document.querySelectorAll('[data-abbr="' + el.getAttribute('data-edit') + '"]').forEach(element => {
                            element.removeAttribute('disabled');
                        });

                        document.querySelectorAll('[data-submit="' + el.getAttribute('data-edit') + '"]').forEach(element => {
                            element.style.display = 'block';
                        });
                        document.querySelectorAll('[data-cancel-submit="' + el.getAttribute('data-edit') + '"]').forEach(element => {
                            element.style.display = 'block';
                        });

                        document.querySelectorAll('[data-delete="' + el.getAttribute('data-edit') + '"]').forEach(element => {
                            element.style.display = 'block';
                        });

                    });

                    // Cancel Edit

                    const cancelEdit = document.querySelectorAll('[data-cancel-submit="' + el.getAttribute('data-edit') + '"]');
                    cancelEdit.forEach((eli) => {
                        eli.addEventListener('click', e => {
                            console.log('clicked')

                            document.querySelectorAll('[data-form-abbr="' + el.getAttribute('data-edit') + '"]').forEach(element => {
                                element.setAttribute('disabled', '');
                            });
                            document.querySelectorAll('[data-form-key="' + el.getAttribute('data-edit') + '"]').forEach(element => {
                                element.setAttribute('disabled', '');
                            });

                            document.querySelectorAll('[data-submit="' + eli.getAttribute('data-cancel-submit') + '"]').forEach(element => {
                                element.style.display = 'none';
                            });
                            console.log(document.querySelectorAll('[data-submit="' + eli.getAttribute('data-cancel-submit') + '"]'))

                            document.querySelectorAll('[data-cancel-submit="' + eli.getAttribute('data-cancel-submit') + '"]').forEach(element => {
                                element.style.display = 'none';
                            });
                            document.querySelectorAll('[data-delete="' + eli.getAttribute('data-cancel-submit') + '"]').forEach(element => {
                                element.style.display = 'none';
                            });
                            document.querySelectorAll('[data-key="' + eli.getAttribute('data-cancel-submit') + '"]').forEach(element => {
                                element.setAttribute('disabled', '');
                            });

                            document.querySelectorAll('[data-abbr="' + eli.getAttribute('data-cancel-submit') + '"]').forEach(element => {
                                element.setAttribute('disabled', '');
                            });

                            document.querySelectorAll('[data-translation="' + eli.getAttribute('data-cancel-submit') + '"]').forEach(element => {
                                element.setAttribute('disabled', '');
                                element.setAttribute('rows', 2);

                            });
                        })
                    })
                    // Submit and update Translations

                    const submitTranslationUpdate = document.querySelectorAll('[data-submit="' + el.getAttribute('data-edit') + '"]');

                    submitTranslationUpdate.forEach((updt) => {
                        updt.addEventListener('click', e => {
                            updateForm.submit()
                        })
                    })


                    // Delete Particular Translations
                    const deleteTranslation = document.querySelectorAll('[data-delete="' + el.getAttribute('data-edit') + '"]');

                    deleteTranslation.forEach((dlt1) => {
                        dlt1.addEventListener('click', e => {
                            console.log('delete clicked')
                            console.log(document.querySelectorAll('[data-deleteinput="' + el.getAttribute('data-edit') + '"]'))
                            document.querySelectorAll('[data-deleteinput="' + el.getAttribute('data-edit') + '"]').forEach(dlt => {
                                dlt.removeAttribute('disabled');
                                console.log(dlt)

                            });

                            updateForm.submit()
                        })
                    })
                });
            })
        }

    </script>
@endsection