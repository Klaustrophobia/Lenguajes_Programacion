package hn.unah.lenguajes.demo.services;

import hn.unah.lenguajes.demo.entities.Comida;
import hn.unah.lenguajes.demo.entities.Ingrediente;

public interface ComidaService {

    public Comida crearComida(Comida comida);

    public Comida buscarComida(long idComida);

    public Comida eliminarComida(long idComida);

    public Ingrediente asignarAInventario (long idingrediente, long idComida);

}
