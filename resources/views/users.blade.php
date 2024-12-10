<x-app-layout>
   @section('title', 'User panel')
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
         {{ __('User panel') }}
      </h2>
   </x-slot>

   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-dark dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

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


               <div class="container">
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                     @foreach ($users as $user)
                        <div class="col">
                           <div class="card mb-3 text-center">
                              <div class="card-body">
                                 <div class="rounded">
                                    <i class="fa-solid fa-circle-user fa-6x"></i>
                                 </div>
                                 <h5 class="card-title mt-2">{{ $user->name }}</h5>
                                 <p class="card-text">{{ ucfirst($user->getRoleNames()->first()) }}</p>
                                 <div
                                    class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-1 row-cols-xl-2 mt-2 g-2">
                                    <div class="col">

                                       {{-- Edit User Button --}}
                                       <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                          data-bs-target="#modalEdit{{ $user->id }}">
                                          <i class="fa-regular fa-pen-to-square"></i>
                                          Edit
                                       </button>
                                       {{-- Edit User Modal --}}
                                       <div class="modal fade" id="modalEdit{{ $user->id }}"
                                          data-bs-backdrop="static" tabindex="-1"
                                          aria-labelledby="modalEditLabel{{ $user->id }}" aria-hidden="true">
                                          <div class="modal-dialog modal-lg modal-dialog-centered">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h1 class="modal-title fs-5"id="modalEdit{{ $user->id }}">
                                                      Editing {{ $user->name }}
                                                   </h1>
                                                   <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                      aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('updateUser') }}" method="POST">
                                                   @csrf
                                                   @method('POST')
                                                   <div class="modal-body text-start">
                                                      <input type="hidden" id="id" name="id"
                                                         value="{{ $user->id }}">
                                                      <label for="selectRole" class="form-label m-0">User's
                                                         role</label>
                                                      <select class="form-select mb-2" aria-label="selectRole"
                                                         id="selectRole" name="selectRole">
                                                         @foreach ($roles as $role)
                                                            <option value="{{ $role->id }}"
                                                               {{ ucfirst($user->getRoleNames()->first()) ? 'selected' : '' }}>
                                                               {{ ucfirst($user->getRoleNames()->first()) }}
                                                            </option>
                                                         @endforeach
                                                      </select>
                                                      <div class="mb-2">
                                                         <label for="name" class="form-label m-0">Name</label>
                                                         <input type="text" class="form-control m-0" id="name"
                                                            name="name" defaultValue="{{ $user->name }}"
                                                            placeholder="{{ $user->name }}"
                                                            value="{{ $user->name }}" required>
                                                      </div>
                                                      <div class="mb-2">
                                                         <label for="email" class="form-label m-0">Email</label>
                                                         <input type="mail" class="form-control m-0" id="email"
                                                            name="email" defaultValue="{{ $user->email }}"
                                                            placeholder="{{ $user->email }}"
                                                            value="{{ $user->email }}">
                                                      </div>
                                                   </div>
                                                   <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary"
                                                         data-bs-target="#modalConfirm{{ $user->id }}"
                                                         data-bs-toggle="modal">Close</button>
                                                      <button type="submit" class="btn btn-primary">Save
                                                         changes</button>
                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                       {{-- Confirm Exit Edit User Modal --}}
                                       <div class="modal fade" id="modalConfirm{{ $user->id }}"
                                          data-bs-backdrop="static" tabindex="-1"
                                          aria-labelledby="modalConfirmLabel{{ $user->id }}" aria-hidden="true">
                                          <div class="modal-dialog modal-sm modal-dialog-centered">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h1 class="modal-title fs-5"id="modalConfirm{{ $user->id }}">
                                                      Exiting edition of {{ $user->name }}
                                                   </h1>
                                                   <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                      aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                   Are you sure you want to exit the edition of
                                                   {{ $user->name }}?
                                                </div>
                                                <div class="modal-footer">
                                                   <button class="btn btn-primary"
                                                      data-bs-target="#modalEdit{{ $user->id }}"
                                                      data-bs-toggle="modal">No, back to
                                                      edit</button>
                                                   <button type="button" class="btn btn-danger"
                                                      data-bs-dismiss="modal">Yes, exit</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                    </div>
                                    <div class="col">
                                       <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                          data-bs-target="#modalUserDelete{{ $user->id }}">
                                          <i class="fa-regular fa-trash-can"></i>
                                          Delete
                                       </button>
                                       <div class="modal fade" id="modalUserDelete{{ $user->id }}"
                                          tabIndex="-1" aria-labelledby="modalPhotoDeleteLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h1 class="modal-title fs-5"
                                                      id="modalUserDeleteLabel{{ $user->id }}">
                                                      Delete user {{ $user->name }}</h1>
                                                   <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                      aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('deleteUser') }}" method="POST">
                                                   @csrf
                                                   @method('DELETE')
                                                   <div class="modal-body">
                                                      <div class="row align-items-center">
                                                         <input type="hidden" id="id" name="id"
                                                            value="{{ $user->id }}">
                                                         <div class="col">
                                                            <p class='text-danger-emphasis fw-bold'>
                                                               Are you sure you want to delete
                                                               "{{ $user->name }}"'s user?</p>
                                                            <p class='text-danger fw-bold text-decoration-underline'>
                                                               You can't undo the changes after!
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary"
                                                         data-bs-dismiss="modal">Close</button>
                                                      <button type="submit" class="btn btn-danger">Delete</button>
                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     @endforeach
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
</x-app-layout>
