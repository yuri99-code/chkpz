import Header from '../parts/Header.jsx';
import Footer from '../parts/Footer.jsx';
import { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import axios from 'axios';
import Form from '../components/Form.jsx';

function Product() {
    const [ product, setProduct ] = useState( {} );

    const [ loading, setLoading ] = useState( true );

    const [ error, setError ] = useState( null );

    const { id } = useParams();

    useEffect( () => {

        async function fetchProduct() {

            try {

                const response = await axios.get(
                    `http://localhost:8080/app/api/page.php?page_id=${ id }`,
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

            <Form/>
            <Footer/>
        </>
    );
}

export default Product;