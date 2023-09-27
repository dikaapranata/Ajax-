<?php include('header.html')?>
<br>
<div class="container">
    <div class="card">
        <div class="card-header">Search Book Data</div>
        <div class="card-body">
        <div class="mb-3">
            <label for="find" class="form-label">Find Book:</label>
            <input type="text" name="keyword" id="keyword" class="form-control" autofocus placeholder="type here.." autocomplete="off">
        </div>
        <button name="tombol-cari" id="tombol-cari" class="btn btn-primary" onclick="searchBook()">Search</button>
        <br><br>
            <div id="hasil"></div>
        </div>
    </div>
</div>
<?php include('footer.html')?>
<script src="ajax.js"></script>