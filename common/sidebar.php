<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="<?= basename($_SERVER['REQUEST_URI'], '.php')  == 'index' ? 'active': ''; ?>" >
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="<?php if(substr(basename($_SERVER['REQUEST_URI']), 0, strpos(basename($_SERVER['REQUEST_URI']), '.') )  == 'insert') echo 'active'; ?>"  >
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-check"></i> Insert Results <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="insert.php?dept=cse">CSE</a>
                            </li>
                            <li>
                                <a href="insert.php?dept=bba">BBA</a>
                            </li>
                            <li>
                                <a href="insert.php?dept=ece">ECE</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if(basename($_SERVER['REQUEST_URI'], '.php')  == 'viewall') echo 'active'; ?>" >
                        <a href="viewall.php"><i class="fa fa-fw fa-eye"></i> View All</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>