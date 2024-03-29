<!-- ##### Advance Search Area Start ##### -->
<div class="south-search-area" style="z-index: 99">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="advanced-search-form">
                    <!-- Search Title -->
                    <div class="search-title">
                        <p>Tìm kiếm</p>
                    </div>
                    <!-- Search Form -->
                    <form action="{{route('timDat_ban')}}" method="post" id="advanceSearch">
                        <div class="row">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="form-group">
                                    <select class="form-control" id="quan" name="quan">
                                        <option value="0">Tất cả quận</option>
                                        @foreach ($quan as $q)
                                        <option value="{{$q->id}}">{{$q->TenQuan}}</option>
                                        @endforeach 
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="form-group">
                                    <select class="form-control" id="dt" name="dt">
                                        <option value="0">Diện tích</option>
                                        <option value="1">Dưới 50m2</option>
                                        <option value="2">50 - 100m2</option>
                                        <option value="3">100 - 150m2</option>
                                        <option value="4">150 - 200m2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="form-group">
                                    <select class="form-control" id="gia" name="gia">
                                        <option value="0">Khoảng giá</option>
                                        <option value="1">Dưới 800 triệu</option>
                                        <option value="2">800 triệu - 1,5 tỷ</option>
                                        <option value="3">1,5 tỷ - 2,5 tỷ</option>
                                        <option value="4">2,5 tỷ - 4 tỷ</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="form-group">
                                    <select class="form-control" id="huong" name="huong">
                                        <option value="A">Hướng đất</option>
                                        <option value="Đ">Đông</option>
                                        <option value="T">Tây</option>
                                        <option value="N">Nam</option>
                                        <option value="B">Bắc</option>
                                        <option value="ĐN">Đông-Nam</option>
                                        <option value="ĐB">Đông-Bắc</option>
                                        <option value="TN">Tây-Nam</option>
                                        <option value="TB">Tây-Bắc</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-7 d-flex justify-content-between align-items-end">
                                <!-- More Filter -->
                                <div class="col-md-4">
                                </div>
                                <!-- Submit -->
                                <div class="form-group">
                                    <button type="submit" class="btn south-btn">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Advance Search Area End ##### -->