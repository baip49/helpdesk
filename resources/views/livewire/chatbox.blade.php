<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;
use Illuminate\Support\Facades\Auth;
?>

<div>
   @livewireStyles

   {{-- Toast --}}
   @if (session('success'))
      <script>
         document.addEventListener('DOMContentLoaded', function() {
            const toastElement = document.getElementById('liveToast');
            const toast = new bootstrap.Toast(toastElement);
            toast.show();
         });
      </script>
   @endif

   <div class="toast-container position-fixed top-12 end-0 p-3">
      <div id="liveToast" class="toast bg-success bg-opacity-50" role="alert" aria-live="assertive" aria-atomic="true">
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
   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-7">
         <div class="bg-dark dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
               <div class="d-flex align-items-start">
                  <div class="nav w-25 flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                     aria-orientation="vertical">
                     <button class="btn btn-success mb-2" id="v-pills-new-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-new"
                        aria-selected="true"><i class="fa-solid fa-pencil me-2"></i>New ticket</button>

                     @foreach ($tickets as $ticket)
                        <button class="nav-link" id="v-pills-chat{{ $ticket->id }}-tab" data-bs-toggle="pill"
                           data-bs-target="#v-pills-chat{{ $ticket->id }}" type="button" role="tab"
                           aria-controls="v-pills-chat{{ $ticket->id }}" aria-selected="true"
                           data-ticket-id="{{ $ticket->id }}">Ticket
                           #{{ $ticket->id }} <span
                              class="badge rounded-pill text-bg-secondary">{{ $ticket->categories->first()->name }}</span>
                        </button>
                     @endforeach
                  </div>
                  <div class="container-fluid tab-content" id="v-pills-tabContent">
                     <div class="tab-pane fade" id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab"
                        tabindex="0">
                        <form>
                           <legend class="border-bottom mb-3">New ticket</legend>
                           <div class="row mb-3">
                              <div class="col">
                                 <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Subject">
                                    <label for="floatingInput">Subject</label>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="form-floating">
                                    <select class="form-select" id="selectCategory"
                                       aria-label="Floating label select example">
                                       @foreach ($categories as $category)
                                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                                       @endforeach
                                    </select>
                                    <label for="selectCategory">Category</label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-floating mb-3">
                              <textarea class="form-control" placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea>
                              <label for="floatingTextarea2">Description</label>
                           </div>
                           <input class="form-control" type="file" id="file" disabled>
                           <div class="form-text" id="minidesc">
                              You can attach a file to this ticket after the ticket is created.
                           </div>
                           <button type="submit" class="btn btn-primary mt-2">Submit ticket</button>
                        </form>
                     </div>

                     @foreach ($tickets as $ticket)
                        <div class="tab-pane fade" id="v-pills-chat{{ $ticket->id }}" role="tabpanel"
                           aria-labelledby="v-pills-chat{{ $ticket->id }}-tab" tabindex="1">

                           <form>
                              <div class="row border-bottom mb-3 align-items-center">
                                 <div class="col-9 m-0">
                                    <legend class="overflow-auto text-nowrap">{{ $ticket->title }}</legend>
                                 </div>
                                 <div class="col-3 m-0">
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
                                       <div class="text-end m-0 my-2">
                                          <label class="px-1" for="message{{ $message->id }}">You</label>
                                          <div class="bg-body-tertiary rounded-2 p-2" id="message2">
                                             {{ $message->message }}
                                          </div>
                                          <div class="form-text m-0" id="{{ $message->id }}">
                                             {{ $message->created_at }}
                                          </div>
                                       </div>
                                    @else
                                       <div class="text-start m-0 my-2">
                                          <label class="px-1" for="message2">{{ $message->user->name }}</label>
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
                                 <form id="form{{ $ticket->id }}" name="form{{ $ticket->id }}"
                                    wire:submit.prevent="sendMessage">
                                    @csrf
                                    <div class="input-group">
                                       <input type="hidden" id="ticket_id" name="ticket_id" wire:model="ticket_id">

                                       <input type="text" class="form-control" placeholder="Type message"
                                          aria-label="Message entry" id="message" name="message"
                                          wire:model="message" required>
                                       <button class="btn btn-outline-secondary" type="button"><i
                                             class="fa-solid fa-file-arrow-up"></i></button>
                                       <button class="btn btn-outline-secondary" id="submit{{ $ticket->id }}"
                                          name="submit{{ $ticket->id }}" type="submit"><i
                                             class="fa-solid fa-paper-plane me-2"></i>Send</button>
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
</div>
