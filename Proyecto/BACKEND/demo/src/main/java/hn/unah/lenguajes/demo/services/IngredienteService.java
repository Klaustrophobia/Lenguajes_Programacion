package hn.unah.lenguajes.demo.services;

import hn.unah.lenguajes.demo.entities.Ingrediente;

public interface IngredienteService {

    public Ingrediente crearInventario (Ingrediente inventario);

    public Ingrediente buscarInventario (long idProducto);

}
