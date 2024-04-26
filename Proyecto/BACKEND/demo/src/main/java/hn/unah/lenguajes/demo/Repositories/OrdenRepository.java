package hn.unah.lenguajes.demo.Repositories;

import java.util.List;

import org.springframework.data.repository.CrudRepository;

import hn.unah.lenguajes.demo.Entities.Cliente;
import hn.unah.lenguajes.demo.Entities.Orden;

public interface OrdenRepository extends CrudRepository<Orden, Long>{
    List<Orden> findByCliente(Cliente cliente);
}
