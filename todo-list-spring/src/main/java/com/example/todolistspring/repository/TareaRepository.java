package com.example.todolistspring.repository;

import com.example.todolistspring.models.Tarea;
import org.springframework.stereotype.Repository;
import org.springframework.data.jpa.repository.JpaRepository;

@Repository
public interface TareaRepository extends JpaRepository<Tarea, Long> {

}

public class TareaRepository {
}
