package hn.unah.lenguajes.ejercicio.demo.repositories;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import hn.unah.lenguajes.ejercicio.demo.entities.Reserva;

@Repository
public interface ReservaRepository extends CrudRepository<Reserva, Integer> {
    // HACER CIERTAS FUNCIONES QUE SE OCUPEN
}
