import Header from '../parts/Header.jsx';
import Footer from '../parts/Footer.jsx';
import { useEffect, useState } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';

function Catalog() {

    const [ categories, setCategories ] = useState( [] );

    const [ loading, setLoading ] = useState( true );

    const [ error, setError ] = useState( null );

    useEffect( () => {

        async function fetchCategories() {

            try {

                const response = await axios.get(
                    'http://localhost:8080/api/page.php?parent_id=4',
                );

                setCategories( response.data );

            } catch ( err ) {

                console.error( err );

                setError( 'Ошибка загрузки' );

            } finally {

                setLoading( false );
            }
        }

        fetchCategories();

    }, [] );

    if ( error ) {
        return <div>{ error }</div>;
    }

    console.log( categories );

    return (
        <>
            <Header/>

            { loading ?
                <div className="app-container">
                    <div>Loading...</div>
                </div>
                :
                <section>
                    <div className="app-container">
                        <div className="row">
                            { categories.map( category => (
                                <div key={ category.id }
                                     className="col-12 col-lg-6 mb-5">
                                    <Link to={ '/category/' + category.id }
                                       className="card">
                                        { category.tvs.category_image ?
                                            <div className="card-image mb-3">
                                                <img
                                                    src={ 'http://localhost:8080/' +
                                                          category.tvs.category_image }
                                                    alt=""
                                                    className="card-img"/>
                                            </div>
                                            :
                                            <div></div>
                                        }
                                        <div
                                            className="card-title">{ category.pagetitle }</div>
                                    </Link>
                                </div>
                            ) ) }
                        </div>
                    </div>
                </section>
            }

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

export default Catalog;