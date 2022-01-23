<div class="pagination">

<!--ТРОЕТОЧИЯ В СПИСКЕ ТОЛЬКО ДЛЯ БОЛЕЕ 9 СТРАНИЦ ДЕЛАЛ-->

  <!--_____________________ЕСЛИ 5 ИЛИ МЕНЬШЕ СТРАНИЦ_________________________-->
  <!--ЧТобы отображалось только 5 ссылок-->
  <?php if($data['count_of_pages'] <= 5): ?>

    <?php if($data['count_of_pages'] > 1 && $data['count_of_pages'] <= 5): ?>
      <?php for($i = 0; $i < $data['count_of_pages']; $i++): ?>
        <a href="/?url=films/store/<?=$a=($i+1)?>"><button class="btnpgn"><?=$i + 1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

  <?php endif;?>

  <!--___________________ЕСЛИ 6 СТРАНИЦ______________________________________-->
  <!--ЧТобы отображалось только 5 ссылок-->

  <?php if($data['count_of_pages'] == 6): ?>

    <!--Кнопка назад-->
    <?php if($data['num_of_page'] != 1): ?>
      <a href="/?url=films/store/<?=$data['num_of_page']-1?>" class="next"><i class="fa fa-angle-left"></i></a>
    <?php endif; ?>

    <?php if($data['num_of_page'] >= 5): ?>
      <span> ... </span>
    <?php endif; ?>

    <!--Кнопка для быстрого перехода на страницу 1-->
    <?php if($data['num_of_page'] >= 5): ?>
      <a href="/?url=films/store/1" class="first"><button class="btnpgn">1</button></a>
    <?php endif; ?>

    <!--Кнопки меньше 5-->
    <?php if($data['count_of_pages'] > 4 && $data['num_of_page'] < 5): ?>
      <?php for($i = 0; $i < 5; $i++): ?>
        <a href="/?url=films/store/<?=$a=($i+1)?>"><button class="btnpgn"><?=$i + 1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <!--Кнопки больше 5-->
    <?php if($data['count_of_pages']-5 < 5 && $data['num_of_page'] > 5): ?>
      <?php for($i = $data['count_of_pages']-5; $i < $data['count_of_pages']; $i++): ?>
        <a href="/?url=films/store/<?=$a=($i+1)?>"><button class="btnpgn"><?=$i+1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <!--Если нажата страница 5, то отображает 2 3 4 5 6-->
    <?php if($data['count_of_pages'] > 4 && $data['count_of_pages']-5 < 5 && $data['num_of_page'] == 5): ?>
      <?php for($i = $data['num_of_page']-4; $i < $data['count_of_pages']; $i++): ?>
        <a href="/?url=films/store/<?=$$a=($i+1)?>"><button class="btnpgn"><?=$i+1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <!--Троеточия в списке-->
    <?php if($data['num_of_page'] < 5): ?>
      <span>...</span>
    <?php endif; ?>

    <!--Кнопка для быстрого перехода на последнюю страницу-->
    <?php if($data['num_of_page'] < $data['count_of_pages']-1): ?>
      <a href="/?url=films/store/<?=$data['count_of_pages']?>" class="last"><button class="btnpgn"><?=$data['count_of_pages']?></button></a>
    <?php endif; ?>

    <!--Кнопка вперед-->
    <?php if($data['num_of_page'] != $data['count_of_pages']): ?>
      <a href="/?url=films/store/<?=$data['num_of_page']+1?>" class="prev"><i class="fa fa-angle-right"></i></a>
    <?php endif; ?>

  <?php endif; ?>

  <!--___________________ЕСЛИ 7 СТРАНИЦ______________________________________-->
  <!--ЧТобы отображалось только 5 ссылок-->

  <?php if($data['count_of_pages'] == 7): ?>

    <!--Кнопка назад-->
    <?php if($data['num_of_page'] != 1): ?>
      <a href="/?url=films/store/<?=$data['num_of_page']-1?>" class="next"><i class="fa fa-angle-left"></i></a>
    <?php endif; ?>

    <!--Кнопка для быстрого перехода на страницу 1-->
    <?php if($data['num_of_page'] >= 5): ?>
      <a href="/?url=films/store/1" class="first"><button class="btnpgn">1</button></a>
    <?php endif; ?>

    <!--Троеточия в списке-->
    <?php if($data['num_of_page'] >= 5): ?>
      <span>...</span>
    <?php endif; ?>

    <!--Кнопки меньше 5-->
    <?php if($data['count_of_pages'] > 4 && $data['num_of_page'] < 5): ?>
      <?php for($i = 0; $i < 5; $i++): ?>
        <a href="/?url=films/store/<?=$a=($i+1)?>"><button class="btnpgn"><?=$i + 1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <!--Кнопки больше 5-->
    <?php if($data['count_of_pages']-5 < 5 && $data['num_of_page'] > 5): ?>
      <?php for($i = $data['count_of_pages']-5; $i < $data['count_of_pages']; $i++): ?>
        <a href="/?url=films/store/<?=$a=($i+1)?>"><button class="btnpgn"><?=$i+1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <!--Если нажата страница 5, то отображает 2 3 4 5 6-->
    <?php if($data['count_of_pages'] > 4 && $data['count_of_pages']-5 < 5 && $data['num_of_page'] == 5): ?>
      <?php for($i = $data['num_of_page']-3; $i < $data['count_of_pages']; $i++): ?>
        <a href="/?url=films/store/<?=$$a=($i+1)?>"><button class="btnpgn"><?=$i+1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <!--Троеточия в списке-->
    <?php if($data['num_of_page'] < 5): ?>
      <span>...</span>
    <?php endif; ?>

    <!--Кнопка для быстрого перехода на последнюю страницу-->
    <?php if($data['num_of_page'] < $data['count_of_pages']-2): ?>
      <a href="/?url=films/store/<?=$data['count_of_pages']?>" class="last"><button class="btnpgn"><?=$data['count_of_pages']?></button></a>
    <?php endif; ?>

    <!--Кнопка вперед-->
    <?php if($data['num_of_page'] != $data['count_of_pages']): ?>
      <a href="/?url=films/store/<?=$data['num_of_page']+1?>" class="prev"><i class="fa fa-angle-right"></i></a>
    <?php endif; ?>

  <?php endif; ?>

  <!--_____________________ЕСЛИ 8 СТРАНИЦ______________________________________-->
  <!--ЧТобы отображалось только 5 ссылок-->

  <?php if($data['count_of_pages'] == 8): ?>

    <!--Кнопка назад-->
    <?php if($data['num_of_page'] != 1): ?>
      <a href="/?url=films/store/<?=$data['num_of_page']-1?>" class="next"><i class="fa fa-angle-left"></i></a>
    <?php endif; ?>

    <!--Кнопка для быстрого перехода на страницу 1-->
    <?php if($data['num_of_page'] >= 5): ?>
      <a href="/?url=films/store/1" class="first"><button class="btnpgn">1</button></a>
    <?php endif; ?>

    <!--Троеточия в списке-->
    <?php if($data['num_of_page'] >= 5): ?>
      <span>...</span>
    <?php endif; ?>

    <!--Кнопки меньше 5-->
    <?php if($data['count_of_pages'] > 4 && $data['num_of_page'] < 5): ?>
      <?php for($i = 0; $i < 5; $i++): ?>
        <a href="/?url=films/store/<?=$a=($i+1)?>"><button class="btnpgn"><?=$i + 1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <!--Кнопки больше 5-->
    <?php if($data['count_of_pages']-5 < 5 && $data['num_of_page'] > 5): ?>
      <?php for($i = $data['count_of_pages']-5; $i < $data['count_of_pages']; $i++): ?>
        <a href="/?url=films/store/<?=$a=($i+1)?>"><button class="btnpgn"><?=$i+1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <!--Если нажата страница 5 (ВСЕГО 8 СТРАНИЦ)-->
    <?php if($data['count_of_pages'] > 4 && $data['count_of_pages']-5 < 5 && $data['num_of_page'] == 5): ?>
      <?php for($i = $data['num_of_page']-3; $i < $data['num_of_page']+2; $i++): ?>
        <a href="/?url=films/store/<?=$a=($i+1)?>"><button class="btnpgn"><?=$i+1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <!--Троеточия в списке-->
    <?php if($data['num_of_page'] <= 4): ?>
      <span>...</span>
    <?php endif; ?>

    <!--Кнопка для быстрого перехода на последнюю страницу-->
    <?php if($data['num_of_page'] < $data['count_of_pages']-2): ?>
      <a href="/?url=films/store/<?=$data['count_of_pages']?>" class="last"><button class="btnpgn"><?=$data['count_of_pages']?></button></a>
    <?php endif; ?>

    <!--Кнопка вперед-->
    <?php if($data['num_of_page'] != $data['count_of_pages']): ?>
      <a href="/?url=films/store/<?=$data['num_of_page']+1?>" class="prev"><i class="fa fa-angle-right"></i></a>
    <?php endif; ?>

  <?php endif; ?>

  <!--_____________________ЕСЛИ 9 СТРАНИЦ______________________________________-->
  <!--ЧТобы отображалось только 5 ссылок-->

  <?php if($data['count_of_pages'] == 9): ?>

    <!--Кнопка назад-->
    <?php if($data['num_of_page'] != 1): ?>
      <a href="/?url=films/store/<?=$data['num_of_page']-1?>" class="next"><i class="fa fa-angle-left"></i></a>
    <?php endif; ?>

    <!--Кнопка для быстрого перехода на страницу 1-->
    <?php if($data['num_of_page'] >= 5): ?>
      <a href="/?url=films/store/1" class="first"><button class="btnpgn">1</button></a>
    <?php endif; ?>

    <!--Троеточия в списке-->
    <?php if($data['num_of_page'] >= 5): ?>
      <span>...</span>
    <?php endif; ?>

    <!--Кнопки меньше 5-->
    <?php if($data['count_of_pages'] > 4 && $data['num_of_page'] < 5): ?>
      <?php for($i = 0; $i < 5; $i++): ?>
        <a href="/?url=films/store/<?=$a=($i+1)?>"><button class="btnpgn"><?=$i + 1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <!--Кнопки больше 5-->
    <?php if($data['count_of_pages']-5 < 5 && $data['num_of_page'] > 5): ?>
      <?php for($i = $data['count_of_pages']-5; $i < $data['count_of_pages']; $i++): ?>
        <a href="/?url=films/store/<?=$a=($i+1)?>"><button class="btnpgn"><?=$i+1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <!--Если нажата страница 5 (ВСЕГО 9 СТРАНИЦ)-->
    <?php if($data['count_of_pages'] > 4 && $data['count_of_pages']-5 < 5 && $data['num_of_page'] == 5): ?>
      <?php for($i = $data['num_of_page']-3; $i < $data['num_of_page']+2; $i++): ?>
        <a href="/?url=films/store/<?=$$a=($i+1)?>"><button class="btnpgn"><?=$i+1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <!--Троеточия в списке-->
    <?php if($data['num_of_page'] <= ($data['count_of_pages']-4)): ?>
      <span>...</span>
    <?php endif; ?>

    <!--Кнопка для быстрого перехода на последнюю страницу-->
    <?php if($data['num_of_page'] < $data['count_of_pages']-3): ?>
      <a href="/?url=films/store/<?=$data['count_of_pages']?>" class="last"><button class="btnpgn"><?=$data['count_of_pages']?></button></a>
    <?php endif; ?>

    <!--Кнопка вперед-->
    <?php if($data['num_of_page'] != $data['count_of_pages']): ?>
      <a href="/?url=films/store/<?=$data['num_of_page']+1?>" class="prev"><i class="fa fa-angle-right"></i></a>
    <?php endif; ?>

  <?php endif; ?>

  <!--_____________________ЕСЛИ БОЛЬШЕ 9 СТРАНИЦ_________________________-->

  <?php if($data['count_of_pages'] > 9): ?>

    <!--Кнопка назад-->
    <?php if($data['num_of_page'] != 1): ?>
      <a href="/?url=films/store/<?=$data['num_of_page']-1?>" class="prev"><i class="fa fa-angle-left"></i></a>
    <?php endif; ?>

    <!--Кнопка для быстрого перехода на страницу 1-->
    <?php if($data['num_of_page'] >= 5): ?>
      <a href="/?url=films/store/1" class="first"><button class="btnpgn">1</button></a>
    <?php endif; ?>

    <!--Троеточия в списке-->
    <?php if($data['num_of_page'] >= 5): ?>
      <span>...</span>
    <?php endif; ?>

    <?php if($data['count_of_pages'] < 5): ?>
      <?php for($i = 0; $i < $data['count_of_pages']; $i++): ?>
        <a href="/?url=films/store/<?=$a=($i+1)?>"><button class="btnpgn"><?=$i + 1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <?php if($data['count_of_pages'] > 4 && $data['num_of_page'] < 5): ?>
      <?php for($i = 0; $i < 5; $i++): ?>
        <a href="/?url=films/store/<?=$a=($i+1)?>"><button class="btnpgn"><?=$i + 1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <?php if($data['count_of_pages']-5 < 5 && $data['num_of_page'] > 5): ?>
      <?php for($i = $data['count_of_pages']-5; $i < $data['count_of_pages']; $i++): ?>
        <a href="/?url=films/store/<?=$a=($i+1)?>"><button class="btnpgn"><?=$i + 1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <?php if($data['count_of_pages'] > 4 && $data['count_of_pages']-5 < 5 && $data['num_of_page'] == 5): ?>
      <?php for($i = $data['num_of_page']-3; $i < $data['count_of_pages']; $i++): ?>
        <a href="/?url=films/store/<?=$a=($i+1)?>"><button class="btnpgn"><?=$i + 1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <?php if($data['count_of_pages'] > 4 && $data['count_of_pages']-5 >= 5 && $data['num_of_page'] >= 5 && $data['num_of_page'] <= $data['count_of_pages']-4): ?>
      <?php for($i = $data['num_of_page']-3; $i < $data['num_of_page']+2; $i++): ?>
        <a href="/?url=films/store/<?=$a=($i+1)?>"><button class="btnpgn"><?=$i + 1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <?php if($data['count_of_pages'] > 4 && $data['count_of_pages']-5 >= 5 && $data['num_of_page'] > $data['count_of_pages']-4): ?>
      <?php for($i = $data['count_of_pages']-5; $i < $data['count_of_pages']; $i++): ?>
        <a href="/?url=films/store/<?=$a=($i+1)?>"><button class="btnpgn"><?=$i + 1?></button></a>
      <?php endfor; ?>
    <?php endif; ?>

    <!--Троеточия в списке-->
    <?php if($data['num_of_page'] <= ($data['count_of_pages']-4)): ?>
      <span>...</span>
    <?php endif; ?>

    <!--Кнопка для быстрого перехода на последнюю страницу-->
    <?php if($data['num_of_page'] < $data['count_of_pages']-3): ?>
      <a href="/?url=films/store/<?=$data['count_of_pages']?>" class="last"><button class="btnpgn"><?=$data['count_of_pages']?></button></a>
    <?php endif; ?>

    <!--Кнопка вперед-->
    <?php if($data['num_of_page'] != $data['count_of_pages']): ?>
      <a href="/?url=films/store/<?=$data['num_of_page']+1?>" class="next"><i class="fa fa-angle-right"></i></a>
    <?php endif; ?>

  <?php endif;?>

</div>


<!--
INSERT INTO `films` (`id`, `name`, `year`, `image`, `long_link`) VALUES (NULL, '1111', '1111', '1111', '1111'),
 (NULL, '1111', '1111', '1111', '1111');
-->
