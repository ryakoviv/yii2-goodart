<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<!----- start-banner---->
<div class="banner text-center" id="home">
    <div class="container">
        <div class="banner-info">
            <a class="banner-btn" href="#"><span> </span></a>
            <h1>Good art</h1>
            <h2>художня майстерня</h2>
            <p>Художник – це не той, в кого є натхнення, а той, хто здатний надихнути інших.</p>
            <!--            <a href="#" class="banner_btn">Lorem Ipsum</a>-->
        </div>
    </div>
</div>
<!----- //End-banner---->
<div class="main">
    <div class="content_top" id="about">
        <div class='container'>
            <h2 class="head">Про нас</h2>
            <p class="m_1">Наближається свято і Ви вагаєтесь над вибором оригінального подарунка? Ви звернулись саме туди.
                Ми можемо запропонувати Вам хороший та ексклюзивний подарунок для Ваших друзів та близьких Вам людей - а саме
                портрет на замовлення по фото. Хорошим способом залишити згадку про свято - зробити фото, але куди більш багатше
                і красивіше на стіні виглядає мальовничий портрет!
            </p>
            <div class="row top_box">
                <div class="col-lg-6 col-md-6 col-sm-6 contentleft_grid">
                    <h3 class="m_2"><i class="fa fa-balance-scale"></i>Ми допоможемо вам з вибором</h3>
                    <p class="m_3">Ми малюємо портрети фарбами або звичайним олівцем, враховуючи всі ваші побажання. Ви можете замовити портрет класичний,сімейний портрет, портрет в стилі поп-арт.</p>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h3 class="m_2"><i class="fa fa-check-square-o"></i>Зробити замовлення дуже просто</h3>
                    <p class="m_3">Усе, що Вам потрібно зробити, щоб замовити портрет - це принести або переслати якісні фотографії або інші зображення, які Ви б хотіли перенести на полотно.</p>
                </div>
            </div>
            <div class="row top_box">
                <div class="col-lg-6 col-md-6 col-sm-6 contentleft_grid">
                    <h3 class="m_2"><i class="fa fa-clock-o"></i>Вам не прийдеться довго чекати</h3>
                    <p class="m_3">Час виконання залежить від черги замовлень, може бути від 2х до 10 днів. Тож краще оформити замовлення раніше!</p>
                    <!--                    <a href="#" class="content_btn">More Info</a>-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h3 class="m_2"><i class="fa fa-globe"></i>Для нас немає значення місце і час</h3>
                    <p class="m_3">Замовлення приймаються будь-коли та з різних куточків України.</p>
                    <!--                    <a href="#" class="content_btn">More Info</a>-->
                </div>
            </div>
        </div>
    </div>
    <div class="content_middle" id="services">
        <div class='container'>
            <h2 class="head">Наші послуги</h2>
            <p class="service_desc">Виконання портрета по фотографії – складний процес, адже художнику необхідно відобразити не лише зовнішню схожість,
                вірно підібрати світло-тіньові та живописні характеристики,але і відчути внутрішній світ, характер людини, що зображується.
                Тому чим якісніше і крупніше буде фотографія для портрета, тим краще зможе художник передати портретну подібність. Головне, щоб на фотографії добре проглядалися риси ообличчя, особливо очі
            </p>

            <div class="row service_top">
                <div class="col-md-4 service_grid">
                    <i class="icon2"></i>
                    <h3><a href="#">Портрети в стилі поп-арт</a></h3>
                    <p>Nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                </div>
                <div class="col-md-4 service_grid">
                    <i class="icon1"></i>
                    <h3><a href="#">Чорно-білі портрети олівцем</a></h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros</p>
                </div>
                <div class="col-md-4 service_grid">
                    <i class="icon3"></i>
                    <h3><a href="#">Індивідуальні замовлення</a></h3>
                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem</p>
                </div>
            </div>
        </div>
    </div>

    <!--portfolio start here-->
    <div class="content_bottom" id="work">
        <div class="container">
            <div class="portfolio" id="portfolio">
                <div class="portfolio_top">
                    <h3 class="m_5">Портфоліо</h3>
                </div>
                <div class="wrap">
                    <div class="porfolio-section">
                        <div class="porfolio-section-title">
                                <h3>Портрети поп-арт</h3>
                        </div>
                        <div class="porfolio-section-content">
                            <div class="fotorama" data-max-height="100%" data-max-width="100%" data-nav="thumbs" data-allowfullscreen="native">
                                <img src="images/pop1.jpg">
                                <img src="images/pop2.jpg">
                                <img src="images/pop3.jpg">
                                <img src="images/pop4.jpg">
                                <img src="images/pop5.jpg">
                                <img src="images/pop6.jpg">
                                <img src="images/pop7.jpg">
                                <img src="images/pop1.jpg">
                                <img src="images/pop2.jpg">
                                <img src="images/pop3.jpg">
                                <img src="images/pop4.jpg">
                                <img src="images/pop5.jpg">
                                <img src="images/pop6.jpg">
                                <img src="images/pop7.jpg">
                            </div>
                        </div>
                    </div>

                    <div class="porfolio-section">
                        <div class="porfolio-section-title">
                            <h3>Портрети олівцем</h3>
                        </div>
                        <div class="porfolio-section-content">
                            <div class="fotorama" data-max-height="100%" data-max-width="100%" data-nav="thumbs" data-allowfullscreen="native">
                                <img src="images/pen1.jpg">
                                <img src="images/pen2.jpg">
                                <img src="images/pen3.jpg">
                                <img src="images/pen4.jpg">
                                <img src="images/pen5.jpg">
                                <img src="images/pen6.jpg">
                                <img src="images/pen7.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--portfolio end here-->

    <div class="content_middle" id="price">
        <div class='container'>
            <h2 class="head">Ціни</h2>
            <p class="service_desc">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dignissimos eaque et expedita fuga natus perferendis quae quam quos voluptates. Accusamus accusantium aliquid animi corporis eligendi laboriosam magnam, numquam sit.
            </p>
            <div class="row service_top">
                <div class="col-md-offset-1 col-md-4  col-sm-offset-1 col-sm-4  col-xs-offset-1 col-xs-5 price_grid" id="price-pop-art">
                    <h3>портрет поп-арт</h3>
                    <div class="form-group">
                        <select class="form-control picture-size">
                            <option>Виберіть розмір</option>
                            <option>Формат А3 (15х21)</option>
                            <option>Формат А2 (21х30)</option>
                            <option>Формат А1 (30х40)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control picture-people-number">
                            <option>Виберіть к-сть людей</option>
                            <option>1 людина на портреті</option>
                            <option>2 людей на портреті</option>
                            <option>3 людей на портреті</option>
                        </select>
                    </div>
                    <p class="error-block hidden">На вибраному Вами розмірі портрета не може бути зображено така кількість людей.</p>
                    <p class="error-block hidden">Виберіть будь ласка інші параметри</p>
                    <p class="price-calc-btn content_btn">Визначити ціну</p>
                </div>

                <div class="col-md-offset-1 col-md-4  col-sm-offset-1 col-sm-4  col-xs-offset-1 col-xs-5 price_grid" id="price-pencil">
                    <h3>портрет олівцем</h3>
                    <div class="form-group">
                        <select class="form-control picture-size">
                            <option>Виберіть розмір</option>
                            <option>Формат А3 (15х21)</option>
                            <option>Формат А2 (21х30)</option>
                            <option>Формат А1 (30х40)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control picture-people-number">
                            <option>Виберіть к-сть людей</option>
                            <option>1 людина на портреті</option>
                            <option>2 людей на портреті</option>
                            <option>3 людей на портреті</option>
                        </select>
                    </div>
                    <p class="error-block hidden">На вибраному Вами розмірі портрета не може бути зображено така кількість людей.</p>
                    <p class="error-block hidden">Виберіть будь ласка інші параметри</p>
                    <p class="price-calc-btn content_btn">Визначити ціну</p>
                </div>

            </div>
        </div>
    </div>

    <div class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="contact-form">
                        <?php $form = ActiveForm::begin(['action' => ['make-order']]); ?>
                            <?= $form->field($model, 'name')->textInput(['maxlength' => 255, 'class' => 'textbox', 'placeholder' =>'Напишіть своє ім\'я тут...'])->label("Ваше ім'я:"); ?>
                            <?= $form->field($model, 'email')->textInput(['maxlength' => 255, 'class' => 'textbox', 'placeholder' =>'Напишіть свій email тут...'])->label("Ваш Email:"); ?>
                            <?= $form->field($model, 'message')->textarea(['placeholder' =>'Напишіть ваше повідомлення тут...'])->label("Повідомлення:"); ?>
<!--                            --><?php //Html::submitButton('Відправити', ['class' => 'submit', "id"=>"submit"]) ?>
                        <input type="submit" value="Відправити">
                        <?php ActiveForm::end() ?>
                    </div>
                </div>
                <div class="col-md-3 contact_right">
                    <h4>Контакти</h4>
                    <p class="contact_address">Пошта:<br>good-art.gmail.com</p>
                    <p class="contact_address1">Телефон:<br>+380 98 701 5557</p>
                    <p class="contact_address1">Ми в соціальних мережах:<br>
                        <i class="fa fa-vk"></i><br>
                        <i class="fa fa fa-facebook-official"></i><br>
                        <i class="fa fa-twitter"></i><br>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>