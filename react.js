import React from 'react';
import ReactDOM from 'react-dom';
import Application from './components/Application'

ReactDOM.render(<Application />, document.getElementById('root'));

import React from 'react';

class Application extends React.Component {
  render() {
    return (
      <div className="App">
        My Application!
      </div>
    );
  }
}

export default Application;
