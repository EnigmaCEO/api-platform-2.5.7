import React from 'react';
import { Route } from 'react-router-dom';
import { List, Create, Update, Show } from '../components/company/';

export default [
  <Route path="/companies/create" component={Create} exact key="create" />,
  <Route path="/companies/edit/:id" component={Update} exact key="update" />,
  <Route path="/companies/show/:id" component={Show} exact key="show" />,
  <Route path="/companies/" component={List} exact strict key="list" />,
  <Route path="/companies/:page" component={List} exact strict key="page" />
];
