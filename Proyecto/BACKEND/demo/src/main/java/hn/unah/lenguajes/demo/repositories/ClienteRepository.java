package hn.unah.lenguajes.demo.repositories;

import org.springframework.data.repository.CrudRepository;

import hn.unah.lenguajes.demo.entities.Cliente;

public interface ClienteRepository extends CrudRepository<Cliente, Long>{

}
