<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/fontawesome/css/all.min.css">
    <script src="../public/bootstrap/js/jquery.min.js"></script>
    <script src="../public/bootstrap/js/popper.min.js"></script>
    <script src="../public/bootstrap/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="navbar-dark container-fluid bg-dark">
        <div class="row">
            <div class="container m-auto">
                <div class="navbar navbar-expand navbar-dark pl-0 pr-0">
                    <a href="" class="navbar-brand">Newspaper</a>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="/" class="nav-link">Main</a></li>
                        <li class="nav-item"><a href="/news" class="nav-link">News</a></li>
                        <li class="nav-item active dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Galery</a>
                            <div class="dropdown-menu mt-2">
                                <a href="" class="dropdown-item">Video</a>
                                <a href="" class="dropdown-item">Photo</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="/news" class="nav-link">Portfolio</a></li>
                        <li class="nav-item"><a href="/about" class="nav-link">About us</a></li>
                        <li class="nav-item"><a href="/contacts" class="nav-link">Contacts</a></li>
                    </ul>
                    <div class="form-inline">
                        <button class="btn btn-primary pl-4 pr-4" style="border-radius:100px !important; overflow:hidden"><i class="fas fa-sign-in-alt mr-2"></i>Sign in</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light">
        <div class="row">
            <div class="container m-auto">
                <div class="navbar navbar-expand navbar-light pl-0 pr-0">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/galery" class="nav-link">Galery</a></li>
                        <li class="nav-item disabled pl-0 pr-0 mr-0 ml-0"><a href="" class="nav-link disabled pl-0 pr-0 mr-0 ml-0">/</a></li>
                        <li class="nav-item"><a href="" class="nav-link disabled"><?=$param[0]?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div  class="container-fluid bg-white">
        <div class="row">
            <div class="container m-auto">
                <div class="navbar navbar-expand navbar-light pl-0 pr-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a href="/news" class="nav-link">Photos</a></li>
                        <li class="nav-item"><a href="/news" class="nav-link">Videos</a></li>
                    </ul>

                    <form class="form-inline" method="POST">
                        <select name="search_by" id="" class="form-control pt-0 pr-2 mr-1" style="border-radius:100px !important; overflow:hidden">
                            <option value="n.header">Header</option>
                            <option value="n.text">text</option>
                            <option value="n.date">Date</option>
                        </select>
                        <select name="sort_by" id="" class="form-control pt-0 mr-1" style="border-radius:100px !important; overflow:hidden">
                            <option value="DESC">DESC</option>
                            <option value="ASC">ASC</option>
                        </select>
                        <div class="input-group p-0 mr-1" style="border-radius:100px !important; overflow:hidden">
                            <input type="text" name="search" class="form-control bg-light border-0" placeholder="Search">
                            <div class="input-group-append">
                                <button name="search_btn" class="btn btn-primary" type="submit">Go</button>
                            </div>
                        </div>
                        <!-- <button class="btn btn-light mr-1" style="border-radius:100px !important; overflow:hidden"><i class="fas fa-table"></i></button>
                        <button class="btn btn-light" style="border-radius:100px !important; overflow:hidden"><i class="fas fa-list"></i></button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-3">
                <div class="sidebar rounded navbar-light bg-light p-4">
                    <h5><i class="fas fa-table mr-2"></i>Categories</h5><hr>
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a href="" class="nav-link"><i class="fas fa-table mr-2"></i>All</a></li>
                        <?php foreach($categories as $v): if($param[0] == strtolower($v['title'])): ?>
                            <li class="nav-item active"><a href="" class="nav-link"><i class="fas fa-tags mr-2"></i><?=$v['title'] ?></a></li>
                        <?php else:?>
                            <li class="nav-item"><a href="./<?=strtolower($v['title'])?>" class="nav-link"><i class="fas fa-tags mr-2"></i><?=$v['title']  ?></a></li>
                        <?php endif; endforeach; ?>
                    </ul>
                </div>        
            </div>
            <div class="col-lg-9 p-1">
                <div class="container pr-0">
                    <?php 
                        if(count($photos)>0):
                    ?>
                    <ul class="list-group">
                    <div class="row">
                    <?php foreach($photos as $n):?>
                        <div class="col-lg-6"> 
                            <div>
                                <img src=".<?=$n['src']?>" alt="" style="width:100%">
                            </div>
                            <li class="list-group-item shadow-sm border-0 mb-3 p-4">
                                <h3 style="font-weight:bold; font-size:18px"><?=$n['title']?></h3>
                                <div class="mb-3 text-muted" style="font-size:14px"><span class="mr-3"><i class="fas fa-calendar mr-1"></i><?=$n['date']?></span><span><i class="fas fa-tag mr-1"></i><?=$n['category']?></span></div>
                                <a href="./<?=$param[0].'/'.$n['id']; ?>"><button class="btn btn-primary"><i class="fas fa-file mr-2"></i>Read more</button></a>
                                <a href="./<?=$param[0].'/'.$n['id']; ?>"><button class="btn btn-warning"><i class="fas fa-download mr-2"></i>Download</button></a>
                                <div class="float-right">
                                    <a href="./<?=$param[0].'/'.$n['id']; ?>"><button class="btn btn-light"><i class="far fa-heart"></i></button></a>
                                    <a href="./<?=$param[0].'/'.$n['id']; ?>"><button class="btn btn-light"><i class="far fa-thumbs-down"></i></button></a>
                                </div>
                            </li>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    </ul>
                    <?php else: ?>
                        <div class="alert alert-danger">
                        <?php if(isset($search)): ?>
                            <strong><?=$search ?></strong>
                        <?php endif; ?>
                         Not found
                        </div>
                    <?php endif; ?>
                    <ul class="pagination float-right">
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">></a></li>
                    </ul>
                
                </div>
            </div>
        </div>
    </div>
</body>

<footer class="bg-light pt-4 pb-4">
    <div class="container">
        <span>Copyright all rights reserved 2020</span>
    </div>
</footer>
</html>