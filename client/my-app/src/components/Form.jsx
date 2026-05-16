import { useState } from 'react';
import axios from 'axios';

function Form( props ) {
    const [ form, setForm ] = useState( {
        name: '',
        email: '',
        message: '',
    } );

    function handleChange( e ) {

        setForm( {
            ...form,
            [ e.target.name ]: e.target.value,
        } );
    }

    async function handleSubmit( e ) {

        e.preventDefault();

        try {

            let result = await axios.post(
                'http://localhost:8080/api/contact.php',
                form,
            );

            console.log(result);

            alert( 'Сообщение отправлено' );

        } catch ( err ) {

            console.error( err );

            alert( 'Ошибка' );
        }
    }

    return (
        <section>
            <div className="form">
                <div className="app-container">
                    <h2 className="form-title">Свяжитесь с нами по любым
                        вопросам</h2>
                    <div className="form-text">Мы всегда рады коллаборациям,
                        интересным проектам и отзывам наших клиентов
                    </div>
                    { props.withPhone ?
                        <div className="form-text">
                            <a href="tel:123456798" className="contacts-item">Телефон:
                                +1 123 456 78 90</a>;
                            <a href="mail:hello@gmail.com"
                               className="contacts-item">Почта:
                                hello@gmail.com</a>
                        </div>
                        : '' }
                    <form onSubmit={ handleSubmit } className="form__wrapper">
                        <div className="form-input__wrap">
                            <input
                                type="text"
                                className="form-input"
                                placeholder="Ваше имя"
                                name="name"
                                value={ form.name }
                                onChange={ handleChange }
                            />
                        </div>
                        <div className="form-input__wrap">
                            <input
                                type="text"
                                className="form-input"
                                placeholder="Ваш E-mail"
                                name="email"
                                value={ form.email }
                                onChange={ handleChange }
                            />
                        </div>
                        <div className="form-input__wrap">
                            <textarea
                                name="message"
                                className="form-textarea"
                                placeholder="Сообщение"
                                value={ form.message }
                                onChange={ handleChange }
                            />
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
    );
}

export default Form;