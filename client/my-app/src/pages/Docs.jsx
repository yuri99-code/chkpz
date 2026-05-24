import Header from '../parts/Header.jsx';
import Footer from '../parts/Footer.jsx';
import Form from '../components/Form.jsx';
import { useEffect, useState } from 'react';
import axios from 'axios';

function Docs() {
    const [ docs, setDocs ] = useState( {} );
    const [ loading, setLoading ] = useState( true );
    const [ error, setError ] = useState( null );

    useEffect( () => {
        async function fetchDocs() {
            try {
                setLoading( true );

                const response = await axios.get(
                    `http://localhost:8080/app/api/page.php?page_id=23`,
                );

                setDocs( response.data[ 0 ] );

            } catch ( err ) {

                console.error( err );

                setError( 'Ошибка загрузки' );

            } finally {
                setLoading( false );
            }
        }

        fetchDocs();
    }, [] );

    if ( error ) {
        return <div>{ error }</div>;
    }
    return (
        <>
            <Header/>

            <section className="page-about">
                <div className="about__top mb-5">
                    <h1 className="about__top-title">Документы</h1>
                </div>

                <div className="app-container">
                    { !loading &&
                      <div
                          className="col-12 col-lg-6 mb-5"
                          dangerouslySetInnerHTML={ {
                              __html: docs.content,
                          } }
                      />
                    }
                </div>
            </section>

            <Form/>
            <Footer/>
        </>
    );
}

export default Docs;