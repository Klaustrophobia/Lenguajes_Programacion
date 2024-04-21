package hn.unah.lenguajes.demo.services;

import java.util.List;

import hn.unah.lenguajes.demo.entities.Orden;

public interface OrdenService {

    public Orden crearOrden(Orden orden);

    public List<Orden> buscarPorCliente(long idcliente);

}
