<?php
$title = "Página inicial";
include "header.php";
?>

<div class="container">
    <h1 class="titulo">Coleções Destaques</h1>
    <main>
        <section class="flex">
            <div class="foto">
                <a href="colecao.php"><img class="foto1" src="assets/images/c_acotar.jpg" alt=""></a>
                <div class="foto">
                    <button> <a class="texto" href="colecao.php">
                            <h3 class="texto_inicial">Coleções: box de livros</h3>
                        </a> </button>
                </div>
            </div>

            <div class="foto">
                <a href="fantasia.php"><img class="foto1" src="assets/images/f_corte.jpg" alt=""></a>
                <div class="foto">
                    <button> <a class="texto" href="fantasia.php">
                            <h3 class="texto_inicial">Indicações: Fantasia</h3>
                        </a> </button>
                </div>
            </div>

            <div class="foto">
                <a href="young.php"><img class="foto1" src="assets/images/r_jogo.png" alt=""></a>
                <div class="foto">
                    <button> <a class="texto" href="young.php">
                            <h3 class="texto_inicial">Destaques: Young Teen</h3>
                        </a> </button>
                </div>
            </div>

            <div class="foto">
                <a href="suspense.php"><img class="foto1" src="assets/images/s_musas.jpg" alt=""></a>
                <div class="foto">
                    <button> <a class="texto" href="suspense.php">
                            <h3 class="texto_inicial">Sem dormir: Suspense</h3>
                        </a> </button>
                </div>
            </div>
        </section>
    </main>
</div>

<?php
include "footer.php";

?>