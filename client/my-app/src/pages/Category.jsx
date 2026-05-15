import Footer from '../parts/Footer.jsx';
import Header from '../parts/Header.jsx';
import { Link, useParams } from 'react-router-dom';
import { useEffect, useState } from 'react';
import axios from 'axios';

function Category() {
    const [ products, setProducts ] = useState( [] );

    const [ loading, setLoading ] = useState( true );

    const [ error, setError ] = useState( null );

    const { id } = useParams();

    useEffect( () => {

        async function fetchProducts() {

            try {

                const response = await axios.get(
                    `http://localhost:8080/api/page.php?parent_id=${ id }`,
                );

                setProducts( response.data );

            } catch ( err ) {

                console.error( err );

                setError( 'Ошибка загрузки' );

            } finally {

                setLoading( false );
            }
        }

        fetchProducts();

    }, [] );

    if ( error ) {
        return <div>{ error }</div>;
    }

    console.log( products );

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
                            { products.map( product => (
                                <div key={ product.id }
                                     className="col-12 col-lg-6 mb-5">
                                    <Link to={ '/product/' + product.id }
                                          className="card">
                                        { product.tvs &&
                                          product.tvs.product_image ?
                                            <div className="card-image mb-3">
                                                <img
                                                    src={ 'http://localhost:8080/' +
                                                          product.tvs.product_image }
                                                    alt=""
                                                    className="card-img"/>
                                            </div>
                                            :
                                            <div></div>
                                        }
                                        <div
                                            className="card-title">{ product.pagetitle }</div>
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

export default Category;