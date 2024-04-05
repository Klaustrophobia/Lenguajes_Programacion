package hn.unah.lenguajes.ejercicio.demo.repositories;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import hn.unah.lenguajes.ejercicio.demo.entities.tipoCliente;

@Repository
public interface TipoClienteRepository extends CrudRepository<tipoCliente, Integer>{
    // HACER CIERTAS FUNCIONES QUE SE OCUPEN
}
