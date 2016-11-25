/**
 * Copyright (c) 2014 Meizu bigertech, All rights reserved.
 * http://www.bigertech.com/
 * @author Chester
 * @date  15/8/24
 * @description
 *
 */
var React = require('react');
var jason = require('../dataJason.js');
import '../index.less';

var ProductCatRow = React.createClass({
  render: function () {
    return (
      <tr>
        <th colSpan="2">{this.props.category}</th>
      </tr>
    );
  }
});

var ProductRow = React.createClass({
  render: function () {
    var style = {
      color: 'red'
    };
    var name = this.props.stocked ?
        this.props.name :
        <span style={style}>
          {this.props.name}
        </span>;
    return (
        <tr>
          <td>{name}</td>
          <td>{this.props.price}</td>
        </tr>
    );
  }
});

var ProductList = React.createClass({
  render: function () {
    var row = [];
    var prevCat = null;
    this.props.items.forEach(function(item) {
      if(item.category !== prevCat) {
        row.push(<ProductCatRow category={item.category} key={item.category} />);
      }
      row.push(<ProductRow name={item.name} price={item.price} stocked={item.stocked} key={item.name} />);
      prevCat = item.category;
    });
    return (
        <div className="productList">
          <table>
            <thead>
              <tr>
                <td>名字</td>
                <td>价格</td>
              </tr>
            </thead>
            <tbody>
              {row}
            </tbody>
          </table>
        </div>
    );
  }
});

var ProductBox = React.createClass({
  getInitialState: function() {
    return {data: this.props.dataIn}
  },
  render: function () {
    return (
      <div className="productBox">
        <ProductList items={this.state.data} />
      </div>
    );
  }
});

React.render(
    <ProductBox dataIn={jason} />,
    document.getElementById("content")
);

module.exports = ProductBox;