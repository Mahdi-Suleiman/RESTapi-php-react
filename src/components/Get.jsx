import React, { useEffect, useState } from 'react';
function Get() {
    const [result, setResult] = useState([]);
    useEffect(() => {
        fetch(`http://localhost:80/rest-api-react-php/server/api/products/fetchAll.php`)
            .then(res => res.json())
            .then(result => setResult(result))
    }, [])
    return (
        <div className='container'>
            <div className='row'>
                {result.map(data => {
                    return (
                        <div className="card m-2" key={data.id} style={{ width: 18 + 'rem' }}>
                            <div className="card-header">
                                #{data.id}
                            </div>
                            <ul className="list-group list-group-flush">
                                <li className="list-group-item"><img src={data.img} alt="product's image" width={100 + "px"} /></li>
                                <li className="list-group-item">{data.name}</li>
                                <li className="list-group-item">{data.description}</li>
                                <li className="list-group-item">{data.price}$</li>
                            </ul>
                        </div>
                    )
                })}


            </div>

        </div>
    );
}

export default Get;
