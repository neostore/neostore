package jpamodel;

import java.util.List;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author belchiorpalma
 */
import javax.ejb.Remote;

@Remote
public interface HRFacade {
    Object queryByRange(String jpqlStmt, int firstResult, int maxResults);
    NeostoreProdutoCategoria persistNeostoreProdutoCategoria(NeostoreProdutoCategoria neostoreProdutoCategoria);
    NeostoreProdutoCategoria mergeNeostoreProdutoCategoria(NeostoreProdutoCategoria neostoreProdutoCategoria);
    void removeNeostoreProdutoCategoria(NeostoreProdutoCategoria neostoreProdutoCategoria);
    List<NeostoreProdutoCategoria> getNeostoreProdutoCategoriaFindAll();
}
