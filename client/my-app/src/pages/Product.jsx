import Header from '../parts/Header.jsx';
import Footer from '../parts/Footer.jsx';

function Product() {
    return (
        <>
            <Header/>

            <section>
                <div className="product">
                    <div className="app-container">
                        <h1 className="product-title mb-4">6361Х-2304015-01
                            Опора шаровая</h1>
                        <div className="product-text mb-5">6361Х-2304015-01
                        </div>

                        <div className="row align-items-center">
                            <div className="col-12 col-lg-6 mb-4 mb-lg-0">
                                <div className="product-image">
                                    <img src="/images/product.jpg" alt=""
                                         className="product-img"/>
                                </div>
                            </div>
                            <div className="col-12 col-lg-6">
                                <div className="product-subtitle mb-3">Опора
                                    шаровая 6361Х-2304015-01 применяется в
                                    специальной колесной и гусеничной технике
                                </div>
                                <div className="product-description">
                                    Номенклатура: Опора шаровая <br/>
                                    Артикул: 6361Х-2304015-01 <br/>
                                    Диаметр: 234х330,5 <br/>
                                    Масса, кг: 40
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

export default Product;