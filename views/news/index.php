<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/fontawesome/css/all.min.css">
    <title>Document</title>
</head>
<body>
<div class="navbar-light container-fluid bg-white border-bottom pb-3 pt-3">
        <div class="row">
            <div class="container m-auto" style="max-width:1200px !important;">
                <div class="navbar navbar-expand pl-0 pr-0">
                    <a href="" class="navbar-brand font-weight-bold">Newspaper</a>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a href="/" class="nav-link">Main</a></li>
                        <li class="nav-item"><a href="/news" class="nav-link">News</a></li>
                        <li class="nav-item"><a href="/news" class="nav-link">Blogs</a></li>
                        <li class="nav-item"><a href="/news" class="nav-link">Portfolio</a></li>
                        <li class="nav-item"><a href="/about" class="nav-link">About us</a></li>
                        <li class="nav-item"><a href="/contacts" class="nav-link">Contacts</a></li>
                        <li class="nav-item"><a href="/contacts" class="nav-link"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="form-inline">
                        <button class="btn btn-dark"><i class="fas fa-sign-in-alt mr-2"></i>Sign in and get started</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div  class="container-fluid">
        <div class="row">
            <div class="container m-auto" style="max-width:1200px !important;">
                <div class="navbar navbar-expand navbar-light pl-0 pr-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"style="border-bottom:1px solid blue"><a href="/news" class="nav-link">Local</a></li>
                        <li class="nav-item"><a href="/news" class="nav-link">Europe</a></li>
                        <li class="nav-item"><a href="/news" class="nav-link">Worldwide</a></li>
                        <li class="nav-item"><a href="/news" class="nav-link">Uzbekistan</a></li>
                    </ul>
                    <div class="form-inline">
                        <select name="" id="" class="form-control bg-light border-0 mr-1">
                            <option value="1">Header</option>
                            <option value="1">text</option>
                            <option value="1">Date</option>
                        </select>
                        <select name="" id="" class="form-control bg-light border-0 mr-1">
                            <option value="1">DESC</option>
                            <option value="1">ASC</option>
                        </select>
                        <div class="input-group p-0 mr-1">
                            <input type="text" class="form-control bg-light border-0" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Go</button>
                            </div>
                        </div>
                        <button class="btn btn-light mr-1"><i class="fas fa-table"></i></button>
                        <button class="btn btn-light"><i class="fas fa-list"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-3" style="max-width:1200px !important;">
        <div class="row">
            <div class="col-lg-3">
                <div class="sidebar navbar-light bg-light p-4">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a href="" class="nav-link"><i class="fas fa-table mr-2"></i>All</a></li>
                        <?php foreach($categories as $v): ?>
                            <li class="nav-item"><a href="news/<?=strtolower($v['title'])?>" class="nav-link"><i class="<?=$v['icon']  ?> mr-2"></i><?=$v['title']  ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>        
            </div>

            <div class="col-lg-9">
                <div class="content">
                    <ul class="list-group">
                        <div class="row">
                            <?php foreach($news as $n):?>
                                <div class="col-lg-6">
                                    <li class="list-group-item shadow border-0 mb-3 p-4">
                                        <h3><?=$n['title']?></h3>
                                        <div class="mt-3 mb-3 text-muted"><span class="mr-3"><i class="fas fa-calendar mr-1"></i><?=$n['date']?></span><span><i class="fas fa-tag mr-1"></i><?=$n['category']?></span></div>
                                        <hr>
                                        <p style="max-height:100px; overflow:hidden"><?=$n['short']?></p>
                                        <a href="news/<?=strtolower($n['category']).'/'.$n['id']?>"><button class="btn btn-primary">Read more</button></a>
                                    </li>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </ul>

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
</html>