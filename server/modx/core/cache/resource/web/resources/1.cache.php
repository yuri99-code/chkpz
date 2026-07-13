<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => 'Поздравляем!',
    'description' => '',
    'alias' => 'index',
    'alias_visible' => 1,
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '[[*id]]
[[*pagetitle]]

<p>You have successfully installed MODX Revolution&nbsp;[[++settings_version]]!</p>
<p>Now that MODX is installed you can login to the manager to create your templates, manage content and install third party extras to add functionality to your&nbsp;website. </p>

<h2>New to&nbsp;MODX?</h2>

<p>Pages on a MODX site are called <a href="https://docs.modx.com/current/en/building-sites/resources">Resources</a>, and are visible on the left-hand side of the manager in the Resources tab. Resources can be nested under other resources, making it easy to create a tree of resources. There are different types of resources for different use&nbsp;cases.</p>

<p>Building your website is done through a combination of <b>Templates</b>, <b>Template Variables</b>, <b>Chunks</b>, <b>Snippets</b> and <b>Plugins</b>. Collectively these are known as <b>Elements</b>, and can also be found in the left-hand side of the manager, in the Elements&nbsp;tab.</p>

<p><a href="https://docs.modx.com/current/en/building-sites/elements/templates">Templates</a> contain the outer markup of any page. Each resource can only be assigned to a single template at a time. By adding <a href="https://docs.modx.com/current/en/building-sites/elements/template-variables">Template Variables</a> to a template, you can add custom fields for any resource using that particular&nbsp;template.</p>

<p>With <a href="https://docs.modx.com/current/en/building-sites/elements/chunks">Chunks</a> you can share parts of the markup, such as a header, across different templates. <a href="https://docs.modx.com/current/en/building-sites/elements/snippets">Snippets</a> are pieces of PHP that return dynamic content, such as summaries of other resources or the current date. With snippets, you will often use Chunks to mark up the pieces of content it returns, instead of mixing the PHP and&nbsp;HTML.</p>

<p>Finally, <a href="https://docs.modx.com/current/en/extending-modx/plugins">Plugins</a> enable more advanced features by hooking into the extensive events system provided by&nbsp;MODX.</p>

<p>To learn more about MODX, be sure to check out the <a href="https://docs.modx.com/current/en/getting-started">Getting Started</a> section in the official&nbsp;documentation.</p>
',
    'richtext' => 1,
    'template' => 3,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1782925754,
    'editedby' => 1,
    'editedon' => 1783962575,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/media.css">
    <title>Кузница</title>
</head>
<body>
    <header class="header">
      <div class="container header__inner">
        <div class="header__left">
          <a href="#" class="logo" aria-label="Кузница">
            <img src="assets/images/logo-header.svg" alt="Кузница" class="logo__image logo__image--header" />
          </a>

          <nav class="nav" aria-label="Основная навигация">
            <a href="#" class="nav__link">Главная</a>
            <div class="nav__item nav__item--dropdown">
              <a href="#" class="nav__link nav__link--with-icon nav__link--active">
                <span>Каталог</span>
                <img src="assets/images/icon-chevron.svg" alt="" aria-hidden="true" class="nav__chevron" />
              </a>
              <div class="nav__dropdown nav__dropdown--catalog" aria-label="Подменю Каталог">
                <a href="#" class="nav__dropdown-link">Авто</a>
                <a href="#" class="nav__dropdown-link">Нефтегаз</a>
                <a href="#" class="nav__dropdown-link">ЖД</a>
                <a href="#" class="nav__dropdown-link">Сельхоз</a>
              </div>
            </div>
            <div class="nav__item nav__item--dropdown">
              <a href="#" class="nav__link nav__link--with-icon">
                <span>О нас</span>
                <img src="assets/images/icon-chevron.svg" alt="" aria-hidden="true" class="nav__chevron" />
              </a>
              <div class="nav__dropdown" aria-label="Подменю О нас">
                <a href="#" class="nav__dropdown-link">О компании</a>
                <a href="#" class="nav__dropdown-link">Производство</a>
                <a href="#" class="nav__dropdown-link">Документы</a>
              </div>
            </div>
            <a href="#" class="nav__link">Контакты</a>
          </nav>
        </div>

        <div class="header__right">
          <label class="search" aria-label="Поиск">
            <img src="assets/images/icon-search.svg" alt="" aria-hidden="true" class="search__icon" />
            <input type="text" placeholder="Поиск по сайту" />
          </label>

          <a href="tel:+78445756564" class="header__phone">+7 (844) 575 65 64</a>
          <a href="tel:+78445756564" class="header__call" aria-label="Позвонить">
            <svg viewBox="0 0 24 24" aria-hidden="true" class="header__call-icon">
              <path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24c1.12.37 2.32.56 3.57.56a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.06 21 3 13.94 3 5a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.19 2.45.56 3.57a1 1 0 0 1-.24 1.02l-2.2 2.2Z" fill="currentColor"/>
            </svg>
          </a>
        </div>
      </div>
    </header>

    <main>
        <section class="section" id="intro">
            <div class="container">
                <div class="section__inner">
                    <h1 class="intro__title">Полный цикл изготовления кузнечно-прессовой продукции</h1>
                    <div class="intro__btns flex">
                        <span class="intro__btn cat__btn"><a href="" class="intro__btn__link flex">Каталог <img src="assets/images/strelka.png" alt=""></a></span>
                        <span class="intro__btn call__btn"><a href="" class="intro__btn__link flex">заказать звонок <img src="assets/images/strelka.png" alt=""></a></span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="about__company">
            <div class="container">
                <div class="section__header">
                    <h2 class="secction__title">О компании</h2>
                </div>
                
                <div class="section__inner flex"> 
                    <div class="about__company__item">
                        <div class="about__item__header flex">
                            <h3 class="about__item__title">( Прочно )</h3>
                            <span class="about__item__count">(1)</span>
                        </div>
                        <div class="about__item__text">
                            <p>
                                Рассчитываем конструкции с запасом прочности под реальные нагрузки и условия эксплуатации
                            </p>
                        </div>
                    </div>
                    <div class="about__company__item">
                        <div class="about__item__header flex">
                            <h3 class="about__item__title">( Основательно )</h3>
                            <span class="about__item__count">(2)</span>
                        </div>
                        <div class="about__item__text">
                            <p>
                                Продумываем каждое решение до деталей — от проекта до финальной сборки
                            </p>
                        </div>
                    </div>
                    <div class="about__company__item">
                        <div class="about__item__header flex">
                            <h3 class="about__item__title">( Надежно )</h3>
                            <span class="about__item__count">(3)</span>
                        </div>
                        <div class="about__item__text">
                            <p>
                                Контролируем качество на каждом этапе и соблюдаем все согласованные сроки
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="apportunities">
            <div class="container">
                <div class="section__header flex">
                    <h2 class="section__title">Производственные возможности</h2>
                </div>

                <div class="section__inner">
                    <div class="apport__slider">
                        <div class="apport__slider__item">
                            <div class="apport__item__title">
                                <h3 class="apport__title__text">Кузнечно-прессовое производство</h3>
                            </div>
                            <div class="apport__item__points flex">
                                <div class="apport__item__point flex">
                                    <img src="assets/images/galka.svg" alt="">
                                    <h4 class="apport__item__text">Мощное оборудование - любые детали</h4>
                                </div>
                                <div class="apport__item__point flex">
                                    <img src="assets/images/galka.svg" alt="">
                                    <h4 class="apport__item__text">Высокая производительность</h4>
                                </div>
                                <div class="apport__item__point flex">
                                    <img src="assets/images/galka.svg" alt="">
                                    <h4 class="apport__item__text">Контроль на каждом этапе</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="create">
            <div class="container">
                <div class="section__header flex">
                    <h2 class="section__title">Что производим</h2>
                    <span class="intro__btn cat__btn"><a href="" class="intro__btn__link flex">Каталог <img src="assets/images/strelka.png" alt=""></a></span>
                </div>
                <div class="section__inner flex">
                    <div class="create__item">
                        <div class="create__item__img">
                            <img src="assets/images/create1.png" alt="">
                        </div>
                        <h3 class="create__item__title">Заготовка колеса</h3>
                        <h4 class="create__item__art">B781</h4>
                    </div>
                    <div class="create__item">
                        <div class="create__item__img">
                            <img src="assets/images/create2.png" alt="">
                        </div>
                        <h3 class="create__item__title">Корпус</h3>
                        <h4 class="create__item__art">В881-01 (175.04; 101.08)</h4>
                    </div>
                    <div class="create__item">
                        <div class="create__item__img">
                            <img src="assets/images/create3.png" alt="">
                        </div>
                        <h3 class="create__item__title">Флянец</h3>
                        <h4 class="create__item__art">В229 (145.48.04.607Б)</h4>
                    </div>
                    <div class="create__item">
                        <div class="create__item__img">
                            <img src="assets/images/create4.png" alt="">
                        </div>
                        <h3 class="create__item__title">Балка</h3>
                        <h4 class="create__item__art">В997 (0901-11-119)</h4>
                    </div>
                    <div class="create__item">
                        <div class="create__item__img">
                            <img src="assets/images/create4.png" alt="">
                        </div>
                        <h3 class="create__item__title">Балка</h3>
                        <h4 class="create__item__art">В997 (0901-11-119)</h4>
                    </div>
                    <div class="create__item">
                        <div class="create__item__img">
                            <img src="assets/images/create 6.png" alt="">
                        </div>
                        <h3 class="create__item__title">Поковка штампованная</h3>
                        <h4 class="create__item__art">К996</h4>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="points_of_work">
            <div class="container">
                <div class="section__header">
                    <h2 class="section__title">Этапы работы</h2>
                </div>
                <div class="section__inner">
                    <div class="points__item flex">
                        <div class="point__num">
                            <h3 class="point__num__text">/1</h3>
                        </div>
                        <div class="point__inner">
                            <h4 class="point__inner_title flex">Получаем заявку <img src="assets/images/point1.svg" alt=""></h4>
                            <p class="point__inner__text">
                                Вы оставляете заявку любым удобным способом, а наш специалист быстро связывается с вами, уточняет детали и фиксирует задачу
                            </p>
                        </div>
                    </div>
                    <div class="points__item flex">
                        <div class="point__num">
                            <h3 class="point__num__text">/2</h3>
                        </div>
                        <div class="point__inner">
                            <h4 class="point__inner_title flex">Анализируем и Рассчитываем <img src="assets/images/point2.svg" alt=""></h4>
                            <p class="point__inner__text">
                                Погружаемся в вашу задачу, учитываем все детали. На основе этого подбираем оптимальное для вас решение, рассчитываем стоимость и сроки
                            </p>
                        </div>
                    </div>
                    <div class="points__item flex">
                        <div class="point__num">
                            <h3 class="point__num__text">/3</h3>
                        </div>
                        <div class="point__inner">
                            <h4 class="point__inner_title flex">Запускаем производство <img src="assets/images/point3.svg" alt=""></h4>
                            <p class="point__inner__text">
                                На этом этапе мы строго контролируем все процессы изготовления, проверяем изделия на соответствие стандартам и требованиям безопасности
                            </p>
                        </div>
                    </div>
                    <div class="points__item flex">
                        <div class="point__num">
                            <h3 class="point__num__text">/4</h3>
                        </div>
                        <div class="point__inner">
                            <h4 class="point__inner_title flex">Доставляем ваш заказ <img src="assets/images/point4.svg" alt=""></h4>
                            <p class="point__inner__text">
                                Организуем безопасную и своевременную доставку на ваш объект. Заранее обсуждаем с вами логистику, а главное – соблюдаем сроки
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="call">
            <div class="container">
                <div class="section__header">
                    <h2 class="section__title">Закажите звонок</h2>
                </div>
                <div class="section__inner">
                    <form class="order-form">
                        <div class="form-section">
                            <h2 class="form-section__title">Общая информация*</h2>
                            <div class="form-row">
                                <input type="text" class="field" placeholder="ФИО" />
                                <input type="text" class="field" placeholder="Название организации" />
                            </div>
                        </div>

                        <div class="form-section">
                            <h2 class="form-section__title">Контактная информация*</h2>
                            <div class="form-row">
                                <input type="email" class="field" placeholder="Электронная почта" />
                                <input type="tel" class="field" placeholder="Номер телефона" />
                            </div>
                        </div>

                        <div class="form-section">
                            <h2 class="form-section__title">Ваш комментарий</h2>
                            <textarea class="textarea" placeholder="Детали по заказу, которые вы желаете уточнить">
                            </textarea>
                        </div>

                        <button type="submit" class="btn btn--blue">Отправить</button>
                    </form>

                    
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">
      <div class="container footer__top">
        <div class="footer__left">
          <a href="#" class="logo logo--footer" aria-label="Кузница">
            <img src="assets/images/logo-footer.svg" alt="Кузница" class="logo__image logo__image--footer" />
          </a>

          <nav class="footer__nav" aria-label="Навигация в подвале">
            <a href="#">Главная</a>
            <div class="nav__item nav__item--dropdown">
              <a href="#" class="nav__link--with-icon footer__nav-link footer__nav-active">
                <span>Каталог</span>
                <img src="assets/images/icon-chevron.svg" alt="" aria-hidden="true" class="nav__chevron" />
              </a>
              <div class="nav__dropdown nav__dropdown--catalog" aria-label="Подменю Каталог">
                <a href="#" class="nav__dropdown-link">Авто</a>
                <a href="#" class="nav__dropdown-link">Нефтегаз</a>
                <a href="#" class="nav__dropdown-link">ЖД</a>
                <a href="#" class="nav__dropdown-link">Сельхоз</a>
              </div>
            </div>
            <div class="nav__item nav__item--dropdown">
              <a href="#" class="footer__nav-link nav__link--with-icon">
                <span>О нас</span>
                <img src="assets/images/icon-chevron.svg" alt="" aria-hidden="true" class="nav__chevron" />
              </a>
              <div class="nav__dropdown" aria-label="Подменю О нас">
                <a href="#" class="nav__dropdown-link">О компании</a>
                <a href="#" class="nav__dropdown-link">Производство</a>
                <a href="#" class="nav__dropdown-link">Документы</a>
              </div>
            </div>
            <a href="#">Контакты</a>
          </nav>
        </div>

        <div class="footer__contacts">
          <a href="mailto:site_seller@volkuz34.ru" class="pill pill--blue">SITE_SELLER@VOLKUZ34.RU</a>
          <a href="tel:+78445756564" class="pill pill--dark">+7 (844) 575 65 64</a>
        </div>
      </div>

      <div class="container footer__bottom">
        <div class="footer__legal">
          <p>
            Все права на материалы, опубликованные на сайте, защищены в соответствии с законодательством об авторском
            праве и смежных правах.
          </p>
          <p>© 2026 ООО «Кузница» · Политика конфиденциальности · Пользовательское соглашение · Правовая оговорка</p>
        </div>

        <div class="footer__address">
          <div class="footer__address-main">
            <img src="assets/images/icon-location.svg" alt="" aria-hidden="true" class="footer__address-icon" />
            <span>Волгоградская область, город Камышин, Промзона</span>
          </div>
          <div class="footer__map-links">
            <span class="map-link">
              <span class="map-link__logo-wrap map-link__logo-wrap--2gis" aria-hidden="true">
                <img src="assets/images/logo-2gis.png" alt="" class="map-link__logo map-link__logo--2gis" />
              </span>
              <span>2ГИС</span>
            </span>
            <span class="map-link-separator"></span>
            <span class="map-link">
              <img src="assets/images/logo-yandex.svg" alt="" aria-hidden="true" class="map-link__logo map-link__logo--yandex" />
              <span>Яндекс Карты</span>
            </span>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$header]]' => '<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/media.css">
    <title>Кузница</title>
</head>
<body>
    <header class="header">
      <div class="container header__inner">
        <div class="header__left">
          <a href="#" class="logo" aria-label="Кузница">
            <img src="assets/images/logo-header.svg" alt="Кузница" class="logo__image logo__image--header" />
          </a>

          <nav class="nav" aria-label="Основная навигация">
            <a href="#" class="nav__link">Главная</a>
            <div class="nav__item nav__item--dropdown">
              <a href="#" class="nav__link nav__link--with-icon nav__link--active">
                <span>Каталог</span>
                <img src="assets/images/icon-chevron.svg" alt="" aria-hidden="true" class="nav__chevron" />
              </a>
              <div class="nav__dropdown nav__dropdown--catalog" aria-label="Подменю Каталог">
                <a href="#" class="nav__dropdown-link">Авто</a>
                <a href="#" class="nav__dropdown-link">Нефтегаз</a>
                <a href="#" class="nav__dropdown-link">ЖД</a>
                <a href="#" class="nav__dropdown-link">Сельхоз</a>
              </div>
            </div>
            <div class="nav__item nav__item--dropdown">
              <a href="#" class="nav__link nav__link--with-icon">
                <span>О нас</span>
                <img src="assets/images/icon-chevron.svg" alt="" aria-hidden="true" class="nav__chevron" />
              </a>
              <div class="nav__dropdown" aria-label="Подменю О нас">
                <a href="#" class="nav__dropdown-link">О компании</a>
                <a href="#" class="nav__dropdown-link">Производство</a>
                <a href="#" class="nav__dropdown-link">Документы</a>
              </div>
            </div>
            <a href="#" class="nav__link">Контакты</a>
          </nav>
        </div>

        <div class="header__right">
          <label class="search" aria-label="Поиск">
            <img src="assets/images/icon-search.svg" alt="" aria-hidden="true" class="search__icon" />
            <input type="text" placeholder="Поиск по сайту" />
          </label>

          <a href="tel:+78445756564" class="header__phone">+7 (844) 575 65 64</a>
          <a href="tel:+78445756564" class="header__call" aria-label="Позвонить">
            <svg viewBox="0 0 24 24" aria-hidden="true" class="header__call-icon">
              <path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24c1.12.37 2.32.56 3.57.56a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.06 21 3 13.94 3 5a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.19 2.45.56 3.57a1 1 0 0 1-.24 1.02l-2.2 2.2Z" fill="currentColor"/>
            </svg>
          </a>
        </div>
      </div>
    </header>',
    '[[$footer]]' => '    <footer class="footer">
      <div class="container footer__top">
        <div class="footer__left">
          <a href="#" class="logo logo--footer" aria-label="Кузница">
            <img src="assets/images/logo-footer.svg" alt="Кузница" class="logo__image logo__image--footer" />
          </a>

          <nav class="footer__nav" aria-label="Навигация в подвале">
            <a href="#">Главная</a>
            <div class="nav__item nav__item--dropdown">
              <a href="#" class="nav__link--with-icon footer__nav-link footer__nav-active">
                <span>Каталог</span>
                <img src="assets/images/icon-chevron.svg" alt="" aria-hidden="true" class="nav__chevron" />
              </a>
              <div class="nav__dropdown nav__dropdown--catalog" aria-label="Подменю Каталог">
                <a href="#" class="nav__dropdown-link">Авто</a>
                <a href="#" class="nav__dropdown-link">Нефтегаз</a>
                <a href="#" class="nav__dropdown-link">ЖД</a>
                <a href="#" class="nav__dropdown-link">Сельхоз</a>
              </div>
            </div>
            <div class="nav__item nav__item--dropdown">
              <a href="#" class="footer__nav-link nav__link--with-icon">
                <span>О нас</span>
                <img src="assets/images/icon-chevron.svg" alt="" aria-hidden="true" class="nav__chevron" />
              </a>
              <div class="nav__dropdown" aria-label="Подменю О нас">
                <a href="#" class="nav__dropdown-link">О компании</a>
                <a href="#" class="nav__dropdown-link">Производство</a>
                <a href="#" class="nav__dropdown-link">Документы</a>
              </div>
            </div>
            <a href="#">Контакты</a>
          </nav>
        </div>

        <div class="footer__contacts">
          <a href="mailto:site_seller@volkuz34.ru" class="pill pill--blue">SITE_SELLER@VOLKUZ34.RU</a>
          <a href="tel:+78445756564" class="pill pill--dark">+7 (844) 575 65 64</a>
        </div>
      </div>

      <div class="container footer__bottom">
        <div class="footer__legal">
          <p>
            Все права на материалы, опубликованные на сайте, защищены в соответствии с законодательством об авторском
            праве и смежных правах.
          </p>
          <p>© 2026 ООО «Кузница» · Политика конфиденциальности · Пользовательское соглашение · Правовая оговорка</p>
        </div>

        <div class="footer__address">
          <div class="footer__address-main">
            <img src="assets/images/icon-location.svg" alt="" aria-hidden="true" class="footer__address-icon" />
            <span>Волгоградская область, город Камышин, Промзона</span>
          </div>
          <div class="footer__map-links">
            <span class="map-link">
              <span class="map-link__logo-wrap map-link__logo-wrap--2gis" aria-hidden="true">
                <img src="assets/images/logo-2gis.png" alt="" class="map-link__logo map-link__logo--2gis" />
              </span>
              <span>2ГИС</span>
            </span>
            <span class="map-link-separator"></span>
            <span class="map-link">
              <img src="assets/images/logo-yandex.svg" alt="" aria-hidden="true" class="map-link__logo map-link__logo--yandex" />
              <span>Яндекс Карты</span>
            </span>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="[[++assets_url]]css/style.css">
    <link rel="stylesheet" href="[[++assets_url]]css/media.css">
    <title>Кузница</title>
</head>
<body>
    <header class="header">
      <div class="container header__inner">
        <div class="header__left">
          <a href="#" class="logo" aria-label="Кузница">
            <img src="assets/images/logo-header.svg" alt="Кузница" class="logo__image logo__image--header" />
          </a>

          <nav class="nav" aria-label="Основная навигация">
            <a href="#" class="nav__link">Главная</a>
            <div class="nav__item nav__item--dropdown">
              <a href="#" class="nav__link nav__link--with-icon nav__link--active">
                <span>Каталог</span>
                <img src="assets/images/icon-chevron.svg" alt="" aria-hidden="true" class="nav__chevron" />
              </a>
              <div class="nav__dropdown nav__dropdown--catalog" aria-label="Подменю Каталог">
                <a href="#" class="nav__dropdown-link">Авто</a>
                <a href="#" class="nav__dropdown-link">Нефтегаз</a>
                <a href="#" class="nav__dropdown-link">ЖД</a>
                <a href="#" class="nav__dropdown-link">Сельхоз</a>
              </div>
            </div>
            <div class="nav__item nav__item--dropdown">
              <a href="#" class="nav__link nav__link--with-icon">
                <span>О нас</span>
                <img src="assets/images/icon-chevron.svg" alt="" aria-hidden="true" class="nav__chevron" />
              </a>
              <div class="nav__dropdown" aria-label="Подменю О нас">
                <a href="#" class="nav__dropdown-link">О компании</a>
                <a href="#" class="nav__dropdown-link">Производство</a>
                <a href="#" class="nav__dropdown-link">Документы</a>
              </div>
            </div>
            <a href="#" class="nav__link">Контакты</a>
          </nav>
        </div>

        <div class="header__right">
          <label class="search" aria-label="Поиск">
            <img src="assets/images/icon-search.svg" alt="" aria-hidden="true" class="search__icon" />
            <input type="text" placeholder="Поиск по сайту" />
          </label>

          <a href="tel:+78445756564" class="header__phone">+7 (844) 575 65 64</a>
          <a href="tel:+78445756564" class="header__call" aria-label="Позвонить">
            <svg viewBox="0 0 24 24" aria-hidden="true" class="header__call-icon">
              <path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24c1.12.37 2.32.56 3.57.56a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.06 21 3 13.94 3 5a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.19 2.45.56 3.57a1 1 0 0 1-.24 1.02l-2.2 2.2Z" fill="currentColor"/>
            </svg>
          </a>
        </div>
      </div>
    </header>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="[[++assets_url]]css/style.css">
    <link rel="stylesheet" href="[[++assets_url]]css/media.css">
    <title>Кузница</title>
</head>
<body>
    <header class="header">
      <div class="container header__inner">
        <div class="header__left">
          <a href="#" class="logo" aria-label="Кузница">
            <img src="assets/images/logo-header.svg" alt="Кузница" class="logo__image logo__image--header" />
          </a>

          <nav class="nav" aria-label="Основная навигация">
            <a href="#" class="nav__link">Главная</a>
            <div class="nav__item nav__item--dropdown">
              <a href="#" class="nav__link nav__link--with-icon nav__link--active">
                <span>Каталог</span>
                <img src="assets/images/icon-chevron.svg" alt="" aria-hidden="true" class="nav__chevron" />
              </a>
              <div class="nav__dropdown nav__dropdown--catalog" aria-label="Подменю Каталог">
                <a href="#" class="nav__dropdown-link">Авто</a>
                <a href="#" class="nav__dropdown-link">Нефтегаз</a>
                <a href="#" class="nav__dropdown-link">ЖД</a>
                <a href="#" class="nav__dropdown-link">Сельхоз</a>
              </div>
            </div>
            <div class="nav__item nav__item--dropdown">
              <a href="#" class="nav__link nav__link--with-icon">
                <span>О нас</span>
                <img src="assets/images/icon-chevron.svg" alt="" aria-hidden="true" class="nav__chevron" />
              </a>
              <div class="nav__dropdown" aria-label="Подменю О нас">
                <a href="#" class="nav__dropdown-link">О компании</a>
                <a href="#" class="nav__dropdown-link">Производство</a>
                <a href="#" class="nav__dropdown-link">Документы</a>
              </div>
            </div>
            <a href="#" class="nav__link">Контакты</a>
          </nav>
        </div>

        <div class="header__right">
          <label class="search" aria-label="Поиск">
            <img src="assets/images/icon-search.svg" alt="" aria-hidden="true" class="search__icon" />
            <input type="text" placeholder="Поиск по сайту" />
          </label>

          <a href="tel:+78445756564" class="header__phone">+7 (844) 575 65 64</a>
          <a href="tel:+78445756564" class="header__call" aria-label="Позвонить">
            <svg viewBox="0 0 24 24" aria-hidden="true" class="header__call-icon">
              <path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24c1.12.37 2.32.56 3.57.56a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.06 21 3 13.94 3 5a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.19 2.45.56 3.57a1 1 0 0 1-.24 1.02l-2.2 2.2Z" fill="currentColor"/>
            </svg>
          </a>
        </div>
      </div>
    </header>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '    <footer class="footer">
      <div class="container footer__top">
        <div class="footer__left">
          <a href="#" class="logo logo--footer" aria-label="Кузница">
            <img src="assets/images/logo-footer.svg" alt="Кузница" class="logo__image logo__image--footer" />
          </a>

          <nav class="footer__nav" aria-label="Навигация в подвале">
            <a href="#">Главная</a>
            <div class="nav__item nav__item--dropdown">
              <a href="#" class="nav__link--with-icon footer__nav-link footer__nav-active">
                <span>Каталог</span>
                <img src="assets/images/icon-chevron.svg" alt="" aria-hidden="true" class="nav__chevron" />
              </a>
              <div class="nav__dropdown nav__dropdown--catalog" aria-label="Подменю Каталог">
                <a href="#" class="nav__dropdown-link">Авто</a>
                <a href="#" class="nav__dropdown-link">Нефтегаз</a>
                <a href="#" class="nav__dropdown-link">ЖД</a>
                <a href="#" class="nav__dropdown-link">Сельхоз</a>
              </div>
            </div>
            <div class="nav__item nav__item--dropdown">
              <a href="#" class="footer__nav-link nav__link--with-icon">
                <span>О нас</span>
                <img src="assets/images/icon-chevron.svg" alt="" aria-hidden="true" class="nav__chevron" />
              </a>
              <div class="nav__dropdown" aria-label="Подменю О нас">
                <a href="#" class="nav__dropdown-link">О компании</a>
                <a href="#" class="nav__dropdown-link">Производство</a>
                <a href="#" class="nav__dropdown-link">Документы</a>
              </div>
            </div>
            <a href="#">Контакты</a>
          </nav>
        </div>

        <div class="footer__contacts">
          <a href="mailto:site_seller@volkuz34.ru" class="pill pill--blue">SITE_SELLER@VOLKUZ34.RU</a>
          <a href="tel:+78445756564" class="pill pill--dark">+7 (844) 575 65 64</a>
        </div>
      </div>

      <div class="container footer__bottom">
        <div class="footer__legal">
          <p>
            Все права на материалы, опубликованные на сайте, защищены в соответствии с законодательством об авторском
            праве и смежных правах.
          </p>
          <p>© 2026 ООО «Кузница» · Политика конфиденциальности · Пользовательское соглашение · Правовая оговорка</p>
        </div>

        <div class="footer__address">
          <div class="footer__address-main">
            <img src="assets/images/icon-location.svg" alt="" aria-hidden="true" class="footer__address-icon" />
            <span>Волгоградская область, город Камышин, Промзона</span>
          </div>
          <div class="footer__map-links">
            <span class="map-link">
              <span class="map-link__logo-wrap map-link__logo-wrap--2gis" aria-hidden="true">
                <img src="assets/images/logo-2gis.png" alt="" class="map-link__logo map-link__logo--2gis" />
              </span>
              <span>2ГИС</span>
            </span>
            <span class="map-link-separator"></span>
            <span class="map-link">
              <img src="assets/images/logo-yandex.svg" alt="" aria-hidden="true" class="map-link__logo map-link__logo--yandex" />
              <span>Яндекс Карты</span>
            </span>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <footer class="footer">
      <div class="container footer__top">
        <div class="footer__left">
          <a href="#" class="logo logo--footer" aria-label="Кузница">
            <img src="assets/images/logo-footer.svg" alt="Кузница" class="logo__image logo__image--footer" />
          </a>

          <nav class="footer__nav" aria-label="Навигация в подвале">
            <a href="#">Главная</a>
            <div class="nav__item nav__item--dropdown">
              <a href="#" class="nav__link--with-icon footer__nav-link footer__nav-active">
                <span>Каталог</span>
                <img src="assets/images/icon-chevron.svg" alt="" aria-hidden="true" class="nav__chevron" />
              </a>
              <div class="nav__dropdown nav__dropdown--catalog" aria-label="Подменю Каталог">
                <a href="#" class="nav__dropdown-link">Авто</a>
                <a href="#" class="nav__dropdown-link">Нефтегаз</a>
                <a href="#" class="nav__dropdown-link">ЖД</a>
                <a href="#" class="nav__dropdown-link">Сельхоз</a>
              </div>
            </div>
            <div class="nav__item nav__item--dropdown">
              <a href="#" class="footer__nav-link nav__link--with-icon">
                <span>О нас</span>
                <img src="assets/images/icon-chevron.svg" alt="" aria-hidden="true" class="nav__chevron" />
              </a>
              <div class="nav__dropdown" aria-label="Подменю О нас">
                <a href="#" class="nav__dropdown-link">О компании</a>
                <a href="#" class="nav__dropdown-link">Производство</a>
                <a href="#" class="nav__dropdown-link">Документы</a>
              </div>
            </div>
            <a href="#">Контакты</a>
          </nav>
        </div>

        <div class="footer__contacts">
          <a href="mailto:site_seller@volkuz34.ru" class="pill pill--blue">SITE_SELLER@VOLKUZ34.RU</a>
          <a href="tel:+78445756564" class="pill pill--dark">+7 (844) 575 65 64</a>
        </div>
      </div>

      <div class="container footer__bottom">
        <div class="footer__legal">
          <p>
            Все права на материалы, опубликованные на сайте, защищены в соответствии с законодательством об авторском
            праве и смежных правах.
          </p>
          <p>© 2026 ООО «Кузница» · Политика конфиденциальности · Пользовательское соглашение · Правовая оговорка</p>
        </div>

        <div class="footer__address">
          <div class="footer__address-main">
            <img src="assets/images/icon-location.svg" alt="" aria-hidden="true" class="footer__address-icon" />
            <span>Волгоградская область, город Камышин, Промзона</span>
          </div>
          <div class="footer__map-links">
            <span class="map-link">
              <span class="map-link__logo-wrap map-link__logo-wrap--2gis" aria-hidden="true">
                <img src="assets/images/logo-2gis.png" alt="" class="map-link__logo map-link__logo--2gis" />
              </span>
              <span>2ГИС</span>
            </span>
            <span class="map-link-separator"></span>
            <span class="map-link">
              <img src="assets/images/logo-yandex.svg" alt="" aria-hidden="true" class="map-link__logo map-link__logo--yandex" />
              <span>Яндекс Карты</span>
            </span>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);