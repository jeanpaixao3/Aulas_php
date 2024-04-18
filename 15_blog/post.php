<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }

    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title']?></h1>
            <p id="post-description"><?= $currentPost['description']?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title']?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ex molestias suscipit corporis laudantium quibusdam unde sapiente repudiandae doloremque, necessitatibus nobis eum, pariatur incidunt! Reiciendis laboriosam ipsum adipisci cumque. Nobis.
            Ducimus labore doloribus quasi optio beatae illum illo qui maiores dolore nobis, sequi quae, totam cupiditate quas sapiente debitis. Laudantium facilis dolores explicabo dolorem id earum magni hic totam. Voluptas!
            Fuga tempora quos sint possimus fugiat rerum enim tempore nostrum neque omnis nobis doloribus praesentium accusantium, cupiditate necessitatibus numquam illum voluptas vitae odio suscipit dolor quis, officia totam aperiam! Molestias!
            Ea officia nobis autem, necessitatibus aliquam at sequi laborum laboriosam quos porro quas, quasi sunt repellendus ut eveniet, ducimus ipsum aspernatur nihil. Corrupti expedita, ipsam mollitia assumenda incidunt a ea.
            Quo, quae facere delectus molestias ipsum repellendus nobis inventore dignissimos labore? Quasi libero expedita incidunt vero vel aperiam nisi eveniet, possimus voluptates quia nobis adipisci, eum maiores accusantium id! Tempore.</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ex molestias suscipit corporis laudantium quibusdam unde sapiente repudiandae doloremque, necessitatibus nobis eum, pariatur incidunt! Reiciendis laboriosam ipsum adipisci cumque. Nobis.
            Ducimus labore doloribus quasi optio beatae illum illo qui maiores dolore nobis, sequi quae, totam cupiditate quas sapiente debitis. Laudantium facilis dolores explicabo dolorem id earum magni hic totam. Voluptas!
            Fuga tempora quos sint possimus fugiat rerum enim tempore nostrum neque omnis nobis doloribus praesentium accusantium, cupiditate necessitatibus numquam illum voluptas vitae odio suscipit dolor quis, officia totam aperiam! Molestias!
            Ea officia nobis autem, necessitatibus aliquam at sequi laborum laboriosam quos porro quas, quasi sunt repellendus ut eveniet, ducimus ipsum aspernatur nihil. Corrupti expedita, ipsam mollitia assumenda incidunt a ea.
            Quo, quae facere delectus molestias ipsum repellendus nobis inventore dignissimos labore? Quasi libero expedita incidunt vero vel aperiam nisi eveniet, possimus voluptates quia nobis adipisci, eum maiores accusantium id! Tempore.</p>
        </div>

        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <div class="tagscontainer">
            <ul id="tags-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach?>                        
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach?> 

            </ul>
        </div>
    </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>