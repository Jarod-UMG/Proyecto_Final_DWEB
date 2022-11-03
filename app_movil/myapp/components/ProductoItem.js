import { View, Text, StyleSheet, TouchableOpacity } from 'react-native'
import React from 'react'
import { useNavigation } from '@react-navigation/native'

const ProductoItem = ({ productos }) => {

    const navigation = useNavigation()

    return (
        <View style={styles.itemContainer}>
            <TouchableOpacity onPress={() => navigation.navigate('ProductoFormScreen', {id:productos.id_medicamento})}>
                <Text style={styles.itemTitle}>{productos.nombre_medicamento}</Text>
                <Text style={styles.itemTitle}>Q.{productos.precio_u}</Text>
            </TouchableOpacity>
        </View>
    )
}

const styles = StyleSheet.create({
    itemContainer: {
        backgroundColor: "#333333",
        padding: 20,
        marginVertical: 8,
        borderRadius: 10,

    },
    itemTitle: {
        color: "#ffffff",
        fontSize: 20,
    },
})

export default ProductoItem