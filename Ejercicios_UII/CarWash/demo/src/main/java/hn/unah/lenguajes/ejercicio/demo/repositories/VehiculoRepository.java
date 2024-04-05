package hn.unah.lenguajes.ejercicio.demo.repositories;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import hn.unah.lenguajes.ejercicio.demo.entities.Vehiculo;

@Repository
public interface VehiculoRepository extends CrudRepository<Vehiculo, Integer> {
    // HACER CIERTAS FUNCIONES QUE SE OCUPEN
}
