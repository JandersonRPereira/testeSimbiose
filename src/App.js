import React, { useEffect , useState} from 'react';
import api from './services/api'

import Carousel from 'react-bootstrap/Carousel';
import Card from 'react-bootstrap/Card';
import Alert from 'react-bootstrap/Alert';

function App() {
  const [list, setList] = useState();
  var listItems
    useEffect(() => {
      api
        .get("/getData")
        .then((response) => {
  
          setList(response.data) 
          console.log("resp", response.data)
  
          for (let index = 0; index < response.data.length; index++) {
            const element = response.data[index];
            listItems = <li>{element.nome}</li>
          }
          console.log("listItems", listItems.props.children)
        } )
        .catch((err) => {
          console.error("ops! ocorreu um erro" + err);
        });
    }, []);



  return (
    <Carousel>
      <Carousel.Item>
        <Card style={{ width: '18rem' }}>
          <Card.Body>
          <Alert key='warning' variant='warning'>Ruanet</Alert>
            <Card.Title>Card Title</Card.Title>
            <Card.Subtitle className="mb-2 text-muted">Card Subtitle</Card.Subtitle>
            <Card.Text>
              Some quick example text to build on the card title and make up the
              bulk of the card's content.
            </Card.Text>
            <Card.Link href="#">Card Link</Card.Link>
            <Card.Link href="#">Another Link</Card.Link>
          </Card.Body>
      </Card>
        <Carousel.Caption>
          <h3>First slide label</h3>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </Carousel.Caption>
      </Carousel.Item>
      <Carousel.Item>
        <img
          className="d-block w-100"
          src="holder.js/800x400?text=Second slide&bg=282c34"
          alt="Second slide"
        />

        <Carousel.Caption>
          <h3>Second slide label</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </Carousel.Caption>
      </Carousel.Item>
      <Carousel.Item>
        <img
          className="d-block w-100"
          src="holder.js/800x400?text=Third slide&bg=20232a"
          alt="Third slide"
        />

        <Carousel.Caption>
          <h3>Third slide label</h3>
          <p>
            Praesent commodo cursus magna, vel scelerisque nisl consectetur.
          </p>
        </Carousel.Caption>
      </Carousel.Item>
    </Carousel>
  );
}

export default App;
