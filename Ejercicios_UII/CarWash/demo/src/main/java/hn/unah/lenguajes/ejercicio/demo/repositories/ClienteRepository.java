package hn.unah.lenguajes.ejercicio.demo.repositories;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import hn.unah.lenguajes.ejercicio.demo.entities.Cliente;

@Repository
public interface ClienteRepository extends CrudRepository<Cliente, Integer> {
    // HACER CIERTAS FUNCIONES QUE SE OCUPEN
}
