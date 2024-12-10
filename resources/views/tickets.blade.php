<x-app-layout>
   @section('title', 'Tickets')
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
         {{ __('Tickets') }}
      </h2>
   </x-slot>

   {{-- <livewire:Chatbox/> --}}

   @push('css')
      img {
      transition: .2s ease all;
      }
      img:hover {
      cursor: pointer;
      transform: scale(1.03);
      transition: .2s ease all;
      }
      img:active {
      transform: scale(.95);
      transition: .2s ease all;
      }
   @endpush

   {{-- Toast --}}
   @if (session('success'))
      <script>
         document.addEventListener('DOMContentLoaded', function() {
            const toastElement = document.getElementById('successToast');
            const toast = new bootstrap.Toast(toastElement);
            toast.show();
         });
      </script>
   @endif

   <div class="toast-container position-fixed top-12 end-0 p-3">
      <div id="successToast" class="toast bg-success bg-opacity-50" role="alert" aria-live="assertive" aria-atomic="true">
         <div class="toast-header">
            <img style="width: 50px;" src="/images/white-logo.png" class="rounded me-2" alt="...">
            <strong class="me-auto">Success</strong>
            <small>now</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
         </div>
         <div class="toast-body">
            {{ session('success') }}
         </div>
      </div>
   </div>

   @if (session('error'))
      <script>
         document.addEventListener('DOMContentLoaded', function() {
            const toastElement = document.getElementById('errorToast');
            const toast = new bootstrap.Toast(toastElement);
            toast.show();
         });
      </script>
   @endif
   <div class="toast-container position-fixed top-12 end-0 p-3">
      <div id="errorToast" class="toast bg-danger bg-opacity-50" role="alert" aria-live="assertive"
         aria-atomic="true">
         <div class="toast-header">
            <img style="width: 50px;" src="/images/white-logo.png" class="rounded me-2" alt="...">
            <strong class="me-auto">Error</strong>
            <small>now</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
         </div>
         <div class="toast-body">
            {{ session('error') }}
         </div>
      </div>
   </div>

   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-7">
         <div class="bg-dark dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
               <div class="d-flex align-items-start">
                  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                     aria-orientation="vertical">
                     <button class="btn btn-success mb-2" id="v-pills-new-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-new"
                        aria-selected="true"><i class="fa-solid fa-pencil me-2"></i>New ticket</button>
                     <button class="btn btn-success mb-2" id="v-pills-assign-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-assign" type="button" role="tab" aria-controls="v-pills-assign"
                        aria-selected="true"><i class="fa-solid fa-pencil me-2"></i>Assign ticket</button>

                     @foreach ($tickets as $ticket)
                        <button class="nav-link" id="v-pills-chat{{ $ticket->id }}-tab" data-bs-toggle="pill"
                           data-bs-target="#v-pills-chat{{ $ticket->id }}" type="button" role="tab"
                           aria-controls="v-pills-chat{{ $ticket->id }}" aria-selected="true"
                           data-ticket-id="{{ $ticket->id }}">Ticket
                           #{{ $ticket->id }}-{{ $ticket->user->name }} <span
                              class="badge rounded-pill text-bg-secondary">{{ $ticket->categories->first()->name }}</span>
                        </button>
                     @endforeach
                  </div>
                  <div class="container-fluid tab-content" id="v-pills-tabContent">
                     <div class="tab-pane fade" id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab"
                        tabindex="0">
                        <form action="{{ route('newTicket') }}" method="POST">
                           @csrf
                           @method('POST')
                           <legend class="border-bottom mb-3">New ticket</legend>
                           <div class="row mb-3">
                              <div class="col">
                                 <div class="form-floating">
                                    <input type="text" class="form-control" id="title" name="title"
                                       placeholder="Subject" maxlength="50" required>
                                    <label for="title">Subject</label>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="form-floating">
                                    <select class="form-select" id="category_id" name="category_id"
                                       aria-label="Select category label" required>
                                       @foreach ($categories as $category)
                                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                                       @endforeach
                                    </select>
                                    <label for="category_id">Category</label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-floating mb-3">
                              <textarea class="form-control" placeholder="Description" id="description" name="description" style="height: 100px"
                                 required></textarea>
                              <label for="description">Description</label>
                           </div>
                           <input class="form-control" type="file" id="file" disabled>
                           <div class="form-text" id="minidesc">
                              You can attach a file to this ticket after the ticket is created.
                           </div>
                           <button type="submit" class="btn btn-primary mt-2">Submit ticket</button>
                        </form>
                     </div>

                     <div class="tab-pane fade" id="v-pills-assign" role="tabpanel"
                        aria-labelledby="v-pills-assign-tab" tabindex="0">
                        <legend class="border-bottom mb-3">Assign ticket</legend>

                        <div class="row">

                           <div class="col-12 col-md-8 col-lg-6">
                              <label for="category_id" class="form-label">Ticket select</label>
                              <select class="form-select" id="category_id" name="category_id"
                                 aria-label="Select category label" required>
                                 @foreach ($ticketsAdmin as $ta)
                                    <option value="{{ $ta->id }}">Ticket #{{ $ta->id }} |
                                       {{ $ta->title }}</option>
                                 @endforeach
                              </select>
                              <div class="form-text" id="minidesc">
                                 Choose a ticket to assign to a Freelancer
                              </div>
                           </div>

                           {{-- <div class="col col-md-8 col-lg-6">
                              <label for="ticketDataList" class="form-label">Ticket search</label>
                              <input class="form-control" list="datalistOptions" id="ticketDataList"
                                 placeholder="Type to search a ticket...">
                              <datalist id="datalistOptions">
                                 @foreach ($ticketsAdmin as $ta)
                                    <option value="ticket #{{ $ta->id }} | {{ $ta->title }}">
                                 @endforeach
                              </datalist>
                              <div class="form-text" id="minidesc">
                                 Examples: ticket#1 | 'ticket id' | 'ticket title'
                              </div>
                           </div> --}}

                           <div class="col-12 col-md-8 col-lg-6">
                              <label for="ticketDataList" class="form-label">Select category</label>
                              <select class="form-select" id="category_id" name="category_id"
                                 aria-label="Select category label" required>
                                 @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                 @endforeach
                              </select>
                           </div>

                           <div class="col-12 col-md-8 col-lg-6">
                              <label for="ticketDataList" class="form-label">Select category</label>
                           </div>

                        </div>

                     </div>

                     @foreach ($tickets as $ticket)
                        <div class="tab-pane fade" id="v-pills-chat{{ $ticket->id }}" role="tabpanel"
                           aria-labelledby="v-pills-chat{{ $ticket->id }}-tab" tabindex="1">

                           <form>
                              <div class="row border-bottom mb-3 align-items-center">
                                  <div class="col-12 col-md-9 m-0">
                                    <legend class="overflow-hidden text-break text-wrap">{{ $ticket->title }}</legend>
                                 </div>
                                 <div class="col-12 col-md-3 m-0">
                                    <div class="form-text text-end">
                                       {{ $ticket->created_at }}
                                    </div>
                                 </div>
                              </div>
                           </form>

                           <div class="card">
                              <div class="card-header overflow-auto" style="max-height: 80px">
                                 {{ $ticket->description }}
                              </div>
                              <div class="card-body overflow-auto" style="height: 400px">
                                 @foreach ($ticket->messages as $message)
                                    @if ($message->user->id == Auth::id())
                                       <hr>
                                       <div class="text-end m-0 my-3">
                                          <div class="row p-0 m-0">
                                             <label class="px-1" for="message{{ $message->id }}">You</label>
                                             <div class="m-0 p-0">
                                                @if ($message->file_path)
                                                   <a href="{{ $message->file_path }}" target="_blank"
                                                      data-bs-toggle="tooltip" data-bs-title="Open in full size">
                                                      <img class="rounded-2 float-end my-2" style="height: 15vh;"
                                                         src="{{ $message->file_path }}">
                                                   </a>
                                                @endif
                                             </div>
                                             <div class="bg-body-tertiary rounded-2 p-2" id="message2">
                                                {{ $message->message }}
                                             </div>
                                             <div class="form-text m-0" id="{{ $message->id }}">
                                                {{ $message->created_at }}
                                             </div>
                                          </div>
                                       </div>
                                    @else
                                       <hr>
                                       <div class="text-start m-0 my-3">
                                          <div class="row p-0 m-0">
                                             <label class="px-1"
                                                for="message{{ $message->id }}">{{ $message->user->name }}</label>
                                             <div class="rounded-2 p-0 m-0">
                                                @if ($message->file_path)
                                                   <a href="{{ $message->file_path }}" target="_blank">
                                                      <img class="rounded-2 float-start my-2" style="height: 15vh;"
                                                         src="{{ $message->file_path }}">
                                                   </a>
                                                @endif
                                             </div>
                                          </div>
                                          <div class="bg-body-secondary rounded-2 p-2" id="message2">
                                             {{ $message->message }}
                                          </div>
                                          <div class="form-text m-0" id="timestamp{{ $message->id }}">
                                             {{ $message->created_at }}
                                          </div>
                                       </div>
                                    @endif
                                 @endforeach
                              </div>
                              <div class="card-footer text-body-secondary">
                                 <form action="{{ route('sendMessage') }}" id="form{{ $ticket->id }}"
                                    name="form{{ $ticket->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="input-group">
                                       <input type="hidden" id="ticket_id" name="ticket_id"
                                          value="{{ $ticket->id }}">
                                       <input type="text" class="form-control" placeholder="Type message"
                                          aria-label="Message entry" id="message" name="message"required>
                                       <input type="file" class="d-none" name="file_input"
                                          id="file_input{{ $ticket->id }}" name="file">
                                       <button type="button" class="btn btn-outline-secondary"
                                          onclick="document.getElementById('file_input{{ $ticket->id }}').click();">
                                          <i class="fa-solid fa-file-arrow-up"></i>
                                       </button>
                                       <button class="btn btn-outline-secondary" id="submit" name="submit"
                                          type="submit"><i class="fa-solid fa-paper-plane me-2"></i>Send</button>
                                    </div>
                                 </form>
                              </div>
                           </div>

                        </div>
                     @endforeach
                  </div>
               </div>

               @livewireScripts
            </div>
         </div>
      </div>
   </div>


</x-app-layout>
