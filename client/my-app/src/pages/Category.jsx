import Footer from '../parts/Footer.jsx';
import Header from '../parts/Header.jsx';
import { Link, useParams } from 'react-router-dom';
import { useEffect, useMemo, useState } from 'react';
import axios from 'axios';
import Form from '../components/Form.jsx';

function Category() {

    const [products, setProducts] = useState([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);

    const [weight, setWeight] = useState('');

    const { id } = useParams();

    useEffect(() => {

        async function fetchProducts() {

            try {

                setLoading(true);

                const response = await axios.get(
                    `http://localhost:8080/api/page.php?parent_id=${id}`
                );

                setProducts(response.data);

            } catch (err) {

                console.error(err);

                setError('Ошибка загрузки');

            } finally {

                setLoading(false);
            }
        }

        fetchProducts();

    }, [id]);

    const uniqueWeights = useMemo(() => {

        const weights = products
        .map(product => product.tvs?.weight)
        .filter(Boolean);

        return [...new Set(weights)]
        .sort((a, b) => Number(a) - Number(b));

    }, [products]);

    const filteredProducts = useMemo(() => {

        if (!weight) {
            return products;
        }

        return products.filter(
            product => String(product.tvs?.weight) === weight
        );

    }, [products, weight]);

    if (error) {
        return <div>{error}</div>;
    }

    return (
        <>
            <Header/>

            {loading
                ? (
                    <div className="app-container">
                        <div>Loading...</div>
                    </div>
                )
                : (
                    <section>
                        <div className="app-container">
                            <div className="row">

                                <div className="col-12 col-lg-10">

                                    <div className="row">

                                        {filteredProducts.map(product => (

                                            <div
                                                key={product.id}
                                                className="col-12 col-lg-6 mb-5"
                                            >

                                                <Link
                                                    to={'/product/' + product.id}
                                                    className="card"
                                                >

                                                    {product.tvs?.product_image && (
                                                        <div className="card-image mb-3">
                                                            <img
                                                                src={
                                                                    'http://localhost:8080/' +
                                                                    product.tvs.product_image
                                                                }
                                                                alt=""
                                                                className="card-img"
                                                            />
                                                        </div>
                                                    )}

                                                    <div className="card-title">
                                                        {product.pagetitle}
                                                    </div>

                                                </Link>

                                            </div>

                                        ))}

                                    </div>

                                </div>

                                <div className="col-12 col-lg-2">

                                    <div className="sidebar p-4">

                                        <div className="sidebar-title">
                                            Фильтры
                                        </div>

                                        <div className="sidebar__item">

                                            <div className="sidebar__item-title">
                                                Вес, кг
                                            </div>

                                            <div className="sidebar__item-filter">

                                                {uniqueWeights.map(value => (

                                                    <div
                                                        key={value}
                                                        className="mb-1"
                                                    >

                                                        <label htmlFor={`weight-${value}`}>
                                                            {value}
                                                        </label>

                                                        <input
                                                            id={`weight-${value}`}
                                                            type="radio"
                                                            name="weight"
                                                            value={value}
                                                            checked={weight === String(value)}
                                                            onChange={(e) => setWeight(e.target.value)}
                                                        />

                                                    </div>

                                                ))}

                                                {uniqueWeights.length > 0 && (
                                                    <button
                                                        className="mt-2"
                                                        onClick={() => setWeight('')}
                                                    >
                                                        Сбросить
                                                    </button>
                                                )}

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </section>
                )
            }

            <Form/>
            <Footer/>
        </>
    );
}

export default Category;