package hn.unah.lenguajes.demo.services;

import hn.unah.lenguajes.demo.entities.Ingrediente;
import hn.unah.lenguajes.demo.entities.Proveedor;

public interface ProveedorService {

    public Proveedor crearProveedor (Proveedor proveedor);

    public Ingrediente asignarAInventario (long idproveedor, String idproducto);

}
