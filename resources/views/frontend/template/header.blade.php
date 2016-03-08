<nav class="navbar navbar-default navbar-fixed-top affix">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll colortitle" href="#page-top">Save Our Earth</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll colorheader" href="<?php if($title == 'Home') echo 'header'; else echo '/'; ?>">Home</a>
                </li>
                <li>
                    <a class="page-scroll colorheader" href="<?php if($title == 'Home') echo '#about'; else echo '/about'; ?>">About</a>
                </li>
                <li>
                    <a class="page-scroll colorheader" href="<?php if($title == 'Home') echo '#article'; else if($title == 'Article') echo '#article';else echo '/article'; ?>">Article</a>
                </li>
                <li>
                    <a class="page-scroll colorheader" href="<?php if($title == 'Home') echo '#news'; else echo '/news'; ?>">News</a>
                </li>
                <li>
                    <a class="page-scroll colorheader" href="<?php if($title == 'Home') echo '#team'; else if($title == 'Member') echo '#team'; else echo '/member'; ?>">Member</a>
                </li>
                <li>
                    <a class="page-scroll colorheader" href="<?php if($title == 'Home') echo '#gallery'; else echo '/gallery'; ?>">Gallery</a>
                </li>
                <li>
                    <a class="page-scroll colorheader" href="<?php if($title == 'Home') echo '#vacancy'; else echo '/vacancy'; ?>">Vacancy</a>
                </li>
                <li>
                    <a class="page-scroll colorheader" href="<?php if($title == 'Home') echo '#bisnis'; else echo '/bisnis'; ?>">Business</a>
                </li>
                <li>
                    <a class="page-scroll colorheader" href="#footer">Contact</a>
                </li>
                <li>
                    <a class="page-scroll colorheader" href="/login"><i class="fa fa-sign-in"></i> Sign In</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>