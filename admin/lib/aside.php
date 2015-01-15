<?php function aside($nav){ ?>

            <aside class="sidebar offscreen-left">
                <!-- main navigation -->
                <nav class="main-navigation" data-height="auto" data-size="6px" data-distance="0" data-rail-visible="true" data-wheel-step="10">
                    <p class="nav-title">MENU</p>
                    <ul class="nav">
                        <!-- dashboard -->
                        <li>
                            <a href="home.php">
                                <i class="ti-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <!-- /dashboard -->

                        <!-- ui -->
                        <li class="<?php if(($nav=='Kategori') or ($nav=='Produk')){ echo 'open'; }else{ echo ''; } ?>">
                            <a href="javascript:;">
                                <i class="toggle-accordion"></i>
                                <i class="ti-layout-media-overlay-alt-2"></i>
                                <span>Shop</span>
                            </a>
                            <ul class="sub-menu">
                                <li <?php if($nav=='Kategori'){ echo 'class="active"'; }else{ echo ''; }?>>
                                    <a href="kategori.php">
                                        <span>Kategori</span>
                                    </a>
                                </li>
                                <li <?php if($nav=='Produk'){ echo 'class="active"'; }else{ echo ''; }?>>
                                    <a href="produk.php">
                                        <span>Produk</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php if(($nav=='Bestseller') or ($nav=='Produkbaru') or ($nav=='Diskon') or ($nav=='Testimoni') or ($nav=='Hubungi Kami') or ($nav=='Banner') ){ echo 'open'; }else{ echo ''; } ?>">
                            <a href="javascript:;">
                                <i class="toggle-accordion"></i>
                                <i class="ti-shopping-cart-full"></i>
                                <span>Frontend</span>
                            </a>
                            <ul class="sub-menu">
                            	 <li <?php if($nav=='Diskon'){ echo 'class="active"'; }else{ echo ''; }?>>
                                    <a href="diskon.php">
                                        <span>Diskon</span>
                                    </a>
                                </li>
                                <li <?php if($nav=='Bestseller'){ echo 'class="active"'; }else{ echo ''; }?>>
                                    <a href="bestseller.php">
                                        <span>Best Seller</span>
                                    </a>
                                </li>
                                <li <?php if($nav=='Produkbaru'){ echo 'class="active"'; }else{ echo ''; }?>>
                                    <a href="produkbaru.php">
                                        <span>Produk Baru</span>
                                    </a>
                                </li>
                                <li <?php if($nav=='Testimoni'){ echo 'class="active"'; }else{ echo ''; }?>>
                                    <a href="testimoni.php">
                                        <span>Testimoni</span>
                                    </a>
                                </li>
                                <li <?php if($nav=='Hubungi Kami'){ echo 'class="active"'; }else{ echo ''; }?>>
                                    <a href="hubungi_kami.php">
                                        <span>Hubungi Kami</span>
                                    </a>
                                </li>
								<li <?php if($nav=='Banner'){ echo 'class="active"'; }else{ echo ''; }?>>
                                    <a href="banner.php">
                                        <span>Banner</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php if(($nav=='Pesan Konsumen')){ echo 'open'; }else{ echo ''; } ?>">
                            <a href="javascript:;">
                                <i class="toggle-accordion"></i>
                                <i class="ti-user"></i>
                                <span>Konsumen</span>
                            </a>
                            <ul class="sub-menu">
                                <li <?php if($nav=='Pesan Konsumen'){ echo 'class="active"'; }else{ echo ''; }?>>
                                    <a href="pesan_konsumen.php">
                                        <span>Pesan Konsumen</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php if(($nav=='Penjualan') or ($nav=='Barangmasuk')){ echo 'open'; }else{ echo ''; } ?>">
                            <a href="javascript:;">
                                <i class="toggle-accordion"></i>
                                <i class="ti-package"></i>
                                <span>Transaksi Barang</span>
                            </a>
                            <ul class="sub-menu">
                                <li <?php if($nav=='Penjualan'){ echo 'class="active"'; }else{ echo ''; }?>>
                                    <a href="penjualan.php">
                                        <span>Penjualan Barang</span>
                                    </a>
                                </li>
                                <li <?php if($nav=='Barangmasuk'){ echo 'class="active"'; }else{ echo ''; }?>>
                                    <a href="#">
                                        <span>Barang Masuk</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- /ui -->

                    </ul>
                    <p class="nav-title">PRINT</p>
                    <ul class="nav">
                        <li>
                            <a href="javascript:;">
                                <i class="ti-control-record text-warning"></i>
                                <span>Invoice</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="ti-control-record text-danger"></i>
                                <span>Laporan Bulanan</span>
                            </a>
                        </li>
                    </ul>                </nav>
            </aside>
            
<?php } ?>