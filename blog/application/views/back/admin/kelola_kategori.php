<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <!-- <i class="fa fa-list ml-2"></i> -->
                    <h1>Manajemen Kategori</h1>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <a class="btn btn-info mb-3" href=""><i class="fa fa-plus"> Tambahkan Data</i></a>
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</td>
                                    <th>Kategori</td>
                                    <th>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $no=1; foreach ($kategori as $k):?>
                                    <td><?= $no++ ?></td>
                                    <td><?= $k->nama ?></td>
                                    <td>
                                        <a class="btn btn-danger" href="" >
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <a class="btn btn-info" href="" >
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>