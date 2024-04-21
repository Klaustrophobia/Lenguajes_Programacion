package hn.unah.lenguajes.demo.entities;

import java.time.LocalDate;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.Table;
import lombok.Data;

@Entity
@Table(name = "ordencompra")
@Data

public class OrdenCompra {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "numeroorden")
    private long numeroorden;

    @Column(name = "fechaemision")
    private LocalDate fechaemision;

    private String estado;

    @JoinColumn(name = "idingrediente")
    private Ingrediente ingrediente;
    
}
