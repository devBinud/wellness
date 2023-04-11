<?php
require_once("include/header.php")
?>


<div class="row">

    <div class="col-12 col-xl-12 mb-4 mb-xl-0">
        <div class="title">
            <h3 class="font-weight-bold text-primary mb-2" style="font-size:20px;">ASSIGN EXECUTIVE</h3>
        </div>
        <div class="title__button">
        </div>
    </div>



    <div class="col-md-12">

        <div class="row mt-4">
            <div class="col-md-12 table-responsive mt-0">

                <div class="card" style="border:1px solid #a4aec4">
                    <div class="card-body table-responsive mt-3">

                        <table class="table table-bordered table-hover text-center">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>Sl No</th>
                                    <th>Date</th>
                                    <th>Invoice No</th>
                                    <th>Customer Name & Address</th>
                                    <th>Asign</th>
                                    <th>View</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>01</td>
                                    <td>12-02-22</td>
                                    <td>AR00/22/001</td>
                                    <td><span class="fw-bold">Arnab Kalita</span> <br> Borbari , Guwahati <br> PIN : 786013</td>
                                    <td>
                                        <select name="category" id="category" class="category" required
                                            style="margin-left:3px;padding:0 26px;width:160px;">
                                            <option value="">Assign Agent</option>
                                            <option value="">Abdul Sonowal</option>
                                            <option value="">Bipul Rabha</option>
                                        </select>
                                    </td>
                                    <td><a href="viewPrescriptionBill.php" target="_blank" class="text-danger"><i class="fa fa-eye"></i></a></td>

                                </tr>


                            </tbody>
                        </table>

                    </div>

                    <div class="pagination__box">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <span class="page-link"><i class="fa-solid fa-angles-left"></i></span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <span class="page-link">
                                        2
                                        <span class="sr-only">(current)</span>
                                    </span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fa-solid fa-angles-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
require_once("include/footer.php")
?>