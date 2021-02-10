<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/fontawesome/css/all.min.css">
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
                        <li class="nav-item active"><a href="/news" class="nav-link">News</a></li>
                        <li class="nav-item"><a href="/news" class="nav-link">Blogs</a></li>
                        <li class="nav-item"><a href="/news" class="nav-link">Portfolio</a></li>
                        <li class="nav-item"><a href="/about" class="nav-link">About us</a></li>
                        <li class="nav-item"><a href="/contacts" class="nav-link">Contacts</a></li>
                    </ul>
                    <div class="form-inline">
                        <button class="btn btn-primary"><i class="fas fa-sign-in-alt mr-2"></i>Sign in</button>
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
                        <li class="nav-item"><a href="/news" class="nav-link">News</a></li>
                        <li class="nav-item disabled pl-0 pr-0 mr-0 ml-0"><a href="" class="nav-link disabled pl-0 pr-0 mr-0 ml-0">/</a></li>
                        <li class="nav-item"><a href="/news/<?=$param[0]?>" class="nav-link"><?=$param[0]?></a></li>
                        <li class="nav-item disabled"><a href="" class="nav-link disabled pl-0 pr-0 mr-0 ml-0">/</a></li>
                        <li class="nav-item disabled"><a href="" class="nav-link disabled"><?php echo $news[0]['title'] ?></a></li>
                    </ul>
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
                        <li class="nav-item"><a href="/news" class="nav-link"><i class="fas fa-table mr-2"></i>All</a></li>
                        <?php foreach($categories as $v): if($param[0] == strtolower($v['title'])): ?>
                            <li class="nav-item active"><a href="" class="nav-link"><i class="fas fa-tags mr-2"></i><?=$v['title'] ?></a></li>
                        <?php else:?>
                            <li class="nav-item"><a href="/news/<?=strtolower($v['title'])?>" class="nav-link"><i class="fas fa-tags mr-2"></i><?=$v['title']  ?></a></li>
                        <?php endif; endforeach; ?>
                    </ul>
                </div>        
            </div>

            <div class="col-lg-9">
                <div class="container pr-0">
                    <?php 
                        if(count($news)>0):
                    ?>
                    <ul class="list-group">
                    <div class="row">
                    <?php foreach($news as $n):?>
                        <div class="col-lg-12 rounded"> 
                            <div>
                                <img src="<?=$n['images']?>" alt="" style="width:100%">
                            </div>
                            <li class="list-group-item mb-3">
                                <h3 style="font-weight:bold; font-size:24px"><?=$n['title']?></h3>
                                <div class="mb-3 text-muted"><span class="mr-3"><i class="fas fa-calendar mr-1"></i><?=$n['date']?></span><span><i class="fas fa-tag mr-1"></i><?=$n['category']?></span></div><hr>
                                <p class="text-muted"><?=$n['text']?></p>
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