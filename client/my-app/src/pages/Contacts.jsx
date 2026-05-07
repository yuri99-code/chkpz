function Contacts() {
    return (
        <>

            <section>
                <div className="contacts">
                    <div className="contacts__top">
                        <h1 className="contacts__top-title">Контакты</h1>
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
                        <div className="form-text">
                            <a href="tel:123456798" className="contacts-item">Телефон:
                                +1 123 456 78 90</a>;
                            <a href="mail:hello@gmail.com"
                               className="contacts-item">Почта:
                                hello@gmail.com</a>
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
        </>
    );
}

export default Contacts;