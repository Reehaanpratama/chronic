<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">

        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </li>
            <li>
                <a href="{{ route('supplier.index') }}"><i class="fa fa-fw" aria-hidden="true" title="Copy to use blind">&#xf29d</i> Supplier</a>
                <a href="{{ route('barang.index') }}"><i class="fa fa-fw" aria-hidden="true" title="Copy to use shopping-bag">&#xf290</i> Barang</a>
                <a href="{{ route('transaksi.index') }}"><i class="fa fa-fw" aria-hidden="true" title="Copy to use shopping-cart">&#xf07a</i> Transaksi</a>
            </li>

        </ul>

    </div>
</div>
