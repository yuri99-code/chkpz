import { Swiper, SwiperSlide } from 'swiper/react';
import { Pagination } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/pagination';
import Header from '../parts/Header.jsx';
import Footer from '../parts/Footer.jsx';
import { Link } from 'react-router-dom';

function Index() {
    const partners = [
        '/images/partner-1.png',
        '/images/partner-2.jpg',
        '/images/partner-3.webp',
        '/images/partner-1.png',
        '/images/partner-2.jpg',
        '/images/partner-3.webp',
    ];

    return (
        <>
            <Header/>
            <section>
                <div className="top">
                    <div className="app-container">
                        <h1 className="top__title">ООО "Кузница"</h1>
                        <div className="top__text">Ваш надежный партнер в
                            производстве
                            горячештампованных поковок для отраслей:
                            сельское хозяйство, нефтегаз, машиностроение,
                            атомная промышленность.
                        </div>
                        <div className="row">
                            <div className="col-12 col-lg-6 mb-4 mb-lg-0">
                                <a href="" className="top-link top-link--white">Запросить
                                    КП</a>
                            </div>
                            <div className="col-12 col-lg-6">
                                <a href="" className="top-link">Изготовление по
                                    чертежу</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div className="products">
                    <div className="app-container">
                        <h2 className="products__title">Наши товары</h2>
                        <div className="row">
                            <Link to="/category/test" className="col-12 col-lg-6 mb-5">
                                <div className="products__item-image">
                                    <img src="/images/product.jpg" alt=""
                                         className="products__item-img"/>
                                </div>
                                <div className="products__item-title">Поковки и
                                    штамповки для автомобильной промышлености
                                </div>
                            </Link>
                            <a href="" className="col-12 col-lg-6 mb-5">
                                <div className="products__item-image">
                                    <img src="/images/product.jpg" alt=""
                                         className="products__item-img"/>
                                </div>
                                <div className="products__item-title">Поковки и
                                    штамповки для автомобильной промышлености
                                </div>
                            </a>
                            <a href="" className="col-12 col-lg-6 mb-5">
                                <div className="products__item-image">
                                    <img src="/images/product.jpg" alt=""
                                         className="products__item-img"/>
                                </div>
                                <div className="products__item-title">Поковки и
                                    штамповки для автомобильной промышлености
                                </div>
                            </a>
                            <a href="" className="col-12 col-lg-6 mb-5">
                                <div className="products__item-image">
                                    <img src="/images/product.jpg" alt=""
                                         className="products__item-img"/>
                                </div>
                                <div className="products__item-title">Поковки и
                                    штамповки для автомобильной промышлености
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div className="about">
                    <div className="app-container">
                        <h2 className="about-title">О нас</h2>
                        <div className="about-line"></div>
                        <div className="about-text">«Кузница» — крупное,
                            динамично развивающееся производственное
                            предприятие,
                            специализирующееся на изготовлении
                            горячештампованных поковок для сельскохозяйственной,
                            нефтегазовой,
                            машиностроительной, атомной и оборонной
                            промышленности. Современные технические решения,
                            высокий
                            профессионализм сотрудников предприятия позволяют
                            изготавливать продукцию по индивидуальным заказам.
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div className="partners">
                    <h2 className="partners-title">Наши партнеры</h2>
                    <Swiper
                        modules={ [ Pagination ] }
                        slidesPerView={ 3 }
                        spaceBetween={ 50 }
                        loop
                        centeredSlides
                        grabCursor
                        pagination={ {
                            clickable: true,
                        } }
                    >
                        { partners.map( ( image, index ) => (
                            <SwiperSlide key={ index }>
                                <div className="partners__slide-image">
                                    <img
                                        src={ image }
                                        alt=""
                                        className="partners__slide-img"
                                    />
                                </div>
                            </SwiperSlide>
                        ) ) }
                    </Swiper>
                </div>
            </section>

            <section>
                <div className="advantages">
                    <div className="app-container">
                        <h2 className="advantages-title">Почему мы хорошо делаем
                            свое дело?</h2>
                        <div className="row">
                            <div className="col-12 col-lg-6">
                                <div
                                    className="row mb-5 justify-content-center">
                                    <div className="col-3 col-lg-2">
                                        <img
                                            src="/images/head_planning_process.svg"
                                            alt="" className="advantages-icon"/>
                                    </div>
                                    <div className="col-6">
                                        <div
                                            className="advantages__item-title">Лучшие
                                            инженеры
                                        </div>
                                        <div className="advantages__item-text">У
                                            нас лучшие инженеры
                                        </div>
                                    </div>
                                </div>

                                <div
                                    className="row mb-5 justify-content-center">
                                    <div className="col-3 col-lg-2">
                                        <img src="/images/safe_safety.svg"
                                             alt=""
                                             className="advantages-icon"/>
                                    </div>
                                    <div className="col-6">
                                        <div
                                            className="advantages__item-title">Качество
                                        </div>
                                        <div
                                            className="advantages__item-text">Гарантия
                                            качества
                                        </div>
                                    </div>
                                </div>

                                <div
                                    className="row mb-5 justify-content-center">
                                    <div className="col-3 col-lg-2">
                                        <img src="/images/speed_time_fast.svg"
                                             alt=""
                                             className="advantages-icon"/>
                                    </div>
                                    <div className="col-6">
                                        <div
                                            className="advantages__item-title">Исполнение
                                            в срок
                                        </div>
                                        <div
                                            className="advantages__item-text">Всегда
                                            соблюдаем срок производства
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-12 col-lg-6">
                                <div className="advantages__image">
                                    <img src="/images/advantages.jpg" alt=""
                                         className="advantages-img"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div className="form">
                    <div className="app-container">
                        <h2 className="form-title">Свяжитесь с нами по любым
                            вопросам</h2>
                        <div className="form-text">Мы всегда рады коллаборациям,
                            интересным проектам и отзывам наших клиентов
                        </div>
                        <form action="" className="form__wrapper">
                            <div className="form-input__wrap">
                                <input type="text" className="form-input"
                                       placeholder="Ваше имя"/>
                            </div>
                            <div className="form-input__wrap">
                                <input type="text" className="form-input"
                                       placeholder="Ваш E-mail"/>
                            </div>
                            <div className="form-input__wrap">
                                <textarea className="form-textarea"
                                          placeholder="Text"></textarea>
                            </div>
                            <button className="form-btn">Отправить</button>
                        </form>
                        <div className="form-personal">Нажимая на кнопку, вы
                            даете согласие на обработку персональных данных и
                            соглашаетесь c политикой конфиденциальности
                        </div>
                    </div>
                </div>
            </section>
            <Footer/>
        </>
    );
}

export default Index;