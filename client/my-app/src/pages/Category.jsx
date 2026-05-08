import Footer from '../parts/Footer.jsx';
import Header from '../parts/Header.jsx';
import { Link } from 'react-router-dom';

function Category() {
    return (
        <>
            <Header/>

            <section>
                <div className="app-container">
                    <div className="row">
                        <div className="col-12 col-lg-6 mb-5">
                            <Link to="/product/15" className="card">
                                <div className="card-image mb-3">
                                    <img src="/images/product.jpg" alt=""
                                         className="card-img"/>
                                </div>
                                <div
                                    className="card-title mb-3">6361Х-2304015-01
                                    Опора шаровая
                                </div>
                                <div className="card-text">Опора шаровая
                                    6361Х-2304015-01 применяется в специальной
                                    колесной и гусеничной технике
                                </div>
                            </Link>
                        </div>
                        <div className="col-12 col-lg-6 mb-5">
                            <a href="" className="card">
                                <div className="card-image mb-3">
                                    <img src="/images/product.jpg" alt=""
                                         className="card-img"/>
                                </div>
                                <div
                                    className="card-title mb-3">6361Х-2304015-01
                                    Опора шаровая
                                </div>
                                <div className="card-text">Опора шаровая
                                    6361Х-2304015-01 применяется в специальной
                                    колесной и гусеничной технике
                                </div>
                            </a>
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

export default Category;