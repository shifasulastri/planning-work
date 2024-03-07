@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <img src="{{asset('assets/img/len.png')}}" style="width: 70px; height: 40px;">
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <center>
    <div class="navbar-nav align-items-center ms-auto">
            <a href="/planning" class="nav-link">
                <i class="fa fa-home"></i>
                <span class="d-none d-lg-inline-flex"></span>
            </a>
            <a href="/scope" class="nav-link" >
                <i class="fas fa-crosshairs me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Scope</span >
            </a>
            <a href="/schedule" class="nav-link">
                <i class="far fa-calendar-alt me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Schedule</span>
            </a>
            <a href="/cost" class="nav-link">
                <i class="	fas fa-coins me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Cost</span>
            </a>
            <a href="/quality" class="nav-link">
                <i class="fas fa-award me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Quality</span>
            </a>
            <a href="/resources" class="nav-link">
                <i class="fa fa-cogs me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Resources</span>
            </a>
            <a href="/communication" class="nav-link">
                <i class="far fa-comments me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Communication</span>
            </a>
            <a href="/risk" class="nav-link">
                <i class="fa fa-cog me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Risk</span>
            </a>
            <a href="/procurement" class="nav-link">
                <i class="fas fa-shopping-cart me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Procurement</span>
            </a>
            <a href="/stakeholder" class="nav-link">
                <i class="fas fa-users-cog me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Stakeholder</span>
            </a> 
    </div>
    </center>
</nav>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-10">
            <div class="bg-secondary rounded h-100 p-4">
                <h2 class="mb-4">Cost Contract to Value</h2>
                <form action="/procurement/save" method="post">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Value</label>
                            <input type="text" name="value" id="" class="form-control mb-3 text-white"  required>
                        </div>   
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Contract Value</label>
                            <select name="contract_value" id="" class="form-select mb-3 text-white" required>
                                <option value="Beban Bahan">Beban Bahan</option>
                                <option value="Gross Profit Margin">Gross Profit Margin</option>
                                <option value="Kegiatan di Lokasi Proyek">Kegiatan di Lokasi Proyek</option>
                                <option value="Beban Personalia">Beban Personalia</option>
                                <option value="Beban Subkon">Beban Subkon</option>
                                <option value="Beban Ekspedisi">Beban Ekspedisi</option>
                                <option value="Beban Swakelola">Beban Swakelola</option>
                                <option value="Biaya Jaminan Bank">Biaya Jaminan Bank</option>
                                <option value="Beban Aftersales">Beban Aftersales</option>
                                <option value="Other">Other</option> 
                            </select>
                        </div>
                    </div> 
                        <button type="submit" class="btn btn-sm btn-outline-success m-2" >Save</button>
                        <button type="reset" class="btn btn-sm btn-outline-danger m-2">Reset</button>   
                </form> 
            </div>
        </div>
    </div>
</div>  
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-10">
            <div class="bg-secondary rounded h-100 p-4">
                <h2 class="mb-4">Beban Bahan</h2>
                <form action="/bebanbarang/save" method="post">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Procurement</label>
                            <select name="procurement" id="" class="form-select mb-3 text-white" required>
                                <option value="IMPOR">IMPOR</option>
                                <option value="LOKAL">LOKAL</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Vendor</label>
                            <input type="text" name="vendor" id="" class="form-control mb-3 text-white"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Description/ Service</label>
                            <input type="text" name="description_service" id="" class="form-control mb-3 text-white"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Volume</label>
                            <input type="text" name="volume" id="" class="form-control mb-3 text-white"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Units</label>
                            <input type="text" name="units" id="" class="form-control mb-3 text-white"  required>
                        </div>   
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Total</label>
                            <input type="text" name="total" id="" class="form-control mb-3 text-white"  required>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-sm btn-outline-success m-2" >Save</button>
                        <button type="reset" class="btn btn-sm btn-outline-danger m-2">Reset</button>          
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-10">
            <div class="bg-secondary rounded h-100 p-4">
                <h2 class="mb-4">Beban Subkon</h2>
                <form action="/bebansubkon/save" method="post">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Procurement</label>
                            <select name="procurement_subkon" id="" class="form-select mb-3 text-white" required>
                                <option value="IMPOR">IMPOR</option>
                                <option value="LOKAL">LOKAL</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Vendor</label>
                            <input type="text" name="vendor_subkon" id="" class="form-control mb-3 text-white"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Description/ Service</label>
                            <input type="text" name="description_service_subkon" id="" class="form-control mb-3 text-white"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Volume</label>
                            <input type="text" name="volume_subkon" id="" class="form-control mb-3 text-white"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Units</label>
                            <input type="text" name="units_subkon" id="" class="form-control mb-3 text-white"  required>
                        </div>   
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Total</label>
                            <input type="text" name="total_subkon" id="" class="form-control mb-3 text-white"  required>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-sm btn-outline-success m-2" >Save</button>
                        <button type="reset" class="btn btn-sm btn-outline-danger m-2">Reset</button>   
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-10">
            <div class="bg-secondary rounded h-100 p-4">
                <h2 class="mb-4">Term of Payment Plan</h2>
                <form action="/termplan/save" method="post">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Term Type</label>
                            <input type="text" name="term_type" id="" class="form-control mb-3 text-white"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Value (%)</label>
                            <input type="text" name="value_term" id="" class="form-control mb-3 text-white"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Value (Rp)</label>
                            <input type="text" name="value_rp_term" id="" class="form-control mb-3 text-white"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Month (Plan)</label>
                            <input type="date" name="month_plan" id="" class="form-control mb-3 text-white"  required>
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0 text-white">Radios</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="option_available"
                                    id="available" value="available" checked>
                                <label class="form-check-label" for="available">
                                    Available
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="option_available"
                                    id="not_available" value="not_available">
                                <label class="form-check-label" for="not_available">
                                    Not Available
                                </label>
                            </div>
                        </div>
                    </fieldset>
                        <button type="submit" class="btn btn-sm btn-outline-success m-2" >Save</button>
                        <button type="reset" class="btn btn-sm btn-outline-danger m-2">Reset</button>   
                </form>
            </div>
        </div>
    </div>   
</div>
@endsection
