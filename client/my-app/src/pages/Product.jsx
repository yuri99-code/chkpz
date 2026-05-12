import Header from '../parts/Header.jsx';
import Footer from '../parts/Footer.jsx';
import { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import axios from 'axios';

function Product() {
    const [ product, setProduct ] = useState( {} );

    const [ loading, setLoading ] = useState( true );

    const [ error, setError ] = useState( null );

    const { id } = useParams();

    useEffect( () => {

        async function fetchProduct() {

            try {

                const response = await axios.get(
                    `http://localhost:8080/api/page.php?page_id=${ id }`,
                );

                setProduct( response.data[ 0 ] );

            } catch ( err ) {

                console.error( err );

                setError( 'Ошибка загрузки' );

            } finally {

                setLoading( false );
            }
        }

        fetchProduct();

    }, [] );

    if ( error ) {
        return <div>{ error }</div>;
    }

    console.log( product );

    return (
        <>
            <Header/>

            <section>
                <div className="product">
                    <div className="app-container">
                        <h1 className="product-title mb-4">{ product.pagetitle }</h1>
                        <div
                            className="product-text mb-5">{ product.longtitle }</div>

                        <div className="row align-items-center">
                            { product.tvs ?
                                <div className="col-12 col-lg-6 mb-4 mb-lg-0">
                                    <div className="product-image">
                                        <img src={ 'http://localhost:8080/' +
                                                   product.tvs.product_image }
                                             alt=""
                                             className="product-img"/>
                                    </div>
                                </div>
                                :
                                <div></div>
                            }
                            <div className="col-12 col-lg-6">
                                <div
                                    dangerouslySetInnerHTML={ {
                                        __html: product.content,
                                    } }
                                />
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