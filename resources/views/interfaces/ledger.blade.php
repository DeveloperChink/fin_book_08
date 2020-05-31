@extends('layouts.accountlayout')
@section('content')
<!-- Start -->

   
   <!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
         <!-- Topbar -->
         @include('interfaces.topbar')
         <!-- End of Topbar -->
         <!-- Begin Page Content -->
         <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Ledger Report</h1>
            <p class="mb-4">Record and manage all of your expenses and incomes here!</p>
            <div class="card shadow mb-4">
               <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">My Ledgers</h6>
                  <div>
                     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Create"><i class="fas fa-plus"></i> Add</button>
                  </div>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered table-hover" id="ledgerTable" width="100%" cellspacing="0">
                        <thead>
                           <tr>
                              <th>Date</th>
                              <th>Description</th>
                              <th>Category</th>
                              <th>Amount</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($data['ledgers'] as $ledger)
                           <tr>
                              <td>{{$ledger->date}}</td>
                              <td>{{$ledger->description}}</td>
                              <td>{{$ledger->category}}</td>
                              <td><span>₱</span>{{$ledger->amount}}</td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
         <div class="container my-auto">
            <div class="copyright text-center my-auto">
               <span>Copyright &copy; WebDev2 2020</span>
            </div>
         </div>
      </footer>
      <!-- End of Footer -->
   </div>
   <!-- End of Content Wrapper -->


<!-- End -->
<!-- Create Modal -->
<div class="modal fade" id="Create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Ledger</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="/account/ledger" method="POST">
               @csrf
               <div class="form-group">
                  <label for="date">Date:  </label>
                  <input type="date" name="date" id="date" class="form-control">
               </div>
               <div class="form-group">
                  <label for="desc">Descrption:  </label>
                  <input type="text" name="description" id="desc" class="form-control">
               </div>
               <div class="form-group">
                  <label for="cate">Category:</label>
                  <select name="category" id="category" class="form-control">
                     <option selected disabled>Select Category</option>
                     @foreach($data['categories'] as $category)
                     <option value="{{$category->description}}">{{$category->description}}</option>
                     @endforeach
                  </select>
               </div>
               <div class="form-group">
                  <label for="amt">Amount:  </label>
                  <input type="number" name="amount" id="amt" class="form-control" min="1">
               </div>
         </div>
         <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <input type="submit"class="btn btn-success" value="Create">
         </div>
      </div>
      </form>
   </div>
</div>

@endsection