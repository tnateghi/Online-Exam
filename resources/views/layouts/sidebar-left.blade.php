<aside id="side-overlay">
    <!-- Side Overlay Scroll Container -->
    <div id="side-overlay-scroll">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow">
            <div class="content-header-section align-parent">
                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary align-v-l" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Side Overlay -->

                <!-- User Info -->
                <div class="content-header-item">
                    <a class="img-link ml-5" href="">
                        <img class="img-avatar img-avatar32" src="/img/avatars/avatar0.jpg" alt="">
                    </a>
                    <a class="align-middle link-effect text-primary-dark font-w600" href="">توحید ناطقی</a>
                </div>
                <!-- END User Info -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <!-- Search -->
            <div class="block pull-t pull-r-l">
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="جستجو..">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-square btn-secondary px-10">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Search -->

            <!-- Mini Stats -->
            <div class="block pull-r-l">
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="row">
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">آمار</div>
                            <div class="font-size-h4">100</div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">آمار</div>
                            <div class="font-size-h4">200</div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">آمار</div>
                            <div class="font-size-h4">300</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Mini Stats -->

            <!-- Block -->
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title">عنوان</h3>
                    <div class="block-options pl-0">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <p>محتوا...</p>
                </div>
            </div>
            <!-- END Block -->
        </div>
        <!-- END Side Content -->
    </div>
    <!-- END Side Overlay Scroll Container -->
</aside>