import React from 'react'
import ProductoList from '../components/ProductoList'
import Layout from '../components/Layout'

const HomeScreen = ({navigation}) => {
  navigation.setOptions({ headerTitle: 'Listado productos' });
  return (
    <Layout>
      <ProductoList />
    </Layout>
  )
};

export default HomeScreen